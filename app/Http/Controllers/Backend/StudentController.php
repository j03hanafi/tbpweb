<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Student;
use App\Models\User;
use App\Traits\UploadFileTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StudentController extends Controller
{

    use UploadFileTrait;

    public function __construct()
    {
        $this->middleware(['permission:students_access']);
    }

    public function index()
    {
        $students = Student::paginate(5);
        return view('backends.students.index', compact('students'));
    }

    public function create()
    {
        if (!Gate::allows('students_manage')) {
            return abort(401);
        }

        $departments = Department::pluck('name', 'id');
        $genders = config('central.gender');
        $marital_statuses = config('central.marital_status');
        $religions = config('central.religion');
        $statuses = Student::STATUS_SELECT;

        return view('backends.students.create', compact(
            'departments',
            'genders',
            'marital_statuses',
            'religions',
            'statuses',
            'statuses'
        ));
    }

    public function store(Request $request)
    {
        if (!Gate::allows('students_manage')) {
            return abort(401);
        }

        $this->validate($request, Student::$validation_rules);

        $user = User::create([
            'username' => request('nim'),
            'email' => request('email'),
            'password' => bcrypt('nim'),
            'status' => 1,
            'type' => User::STUDENT
        ]);
        $user->assignRole(config('central.system_role')['student']);

        $student = $user->student()->create($request->only(
            'nim',
            'nik',
            'name',
            'year',
            'birthday',
            'birthplace',
            'phone',
            'gender',
            'department_id',
            'status',
            'religion',
            'address',
            'marital_status'));

        if($request->hasFile('photo')){
            $filename = uniqid($student->id . '_') . '.' . $request->file('photo')->getClientOriginalExtension();
            $student->photo = $this->saveUploadedPhoto($student->photo, $request->file('photo'), config('central.path.student_photo'), $filename);
            $student->save();
            $user->avatar = $this->saveAvatar($user->avatar, $request->file('photo'), $filename);
            $user->save();
        }

        notify('success', 'Berhasil menambahkan data mahasiswa atas nama ' . request('name'));
        return redirect()->route('backend.students.show', [$user->id]);
    }

    public function show(Student $student)
    {
        return view('backends.students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        if (!Gate::allows('students_manage')) {
            return abort(401);
        }

        $departments = Department::pluck('name', 'id');
        $genders = config('central.gender');
        $marital_statuses = config('central.marital_status');
        $statuses = Student::STATUS_SELECT;
        $religions = config('central.religion');

        return view('backends.students.edit', compact(
            'student',
            'departments',
            'genders',
            'religions',
            'statuses',
            'marital_statuses'
        ));
    }

    public function update(Request $request, Student $student)
    {
        if (!Gate::allows('students_manage')) {
            return abort(401);
        }

        $request->validate(Student::$validation_rules);

        $student->update($request->only(
            'nim',
            'nik',
            'name',
            'year',
            'birthday',
            'birthplace',
            'phone',
            'gender',
            'department_id',
            'address',
            'status',
            'religion',
            'marital_status'));

        $user = $student->user;
        $user->update([
            'username' => request('nim'),
            'email' => request('email'),
            'status' => 1,
        ]);

        if($request->hasFile('photo')){
            $filename = uniqid($student->id . '_') . '.' . $request->file('photo')->getClientOriginalExtension();
            $student->photo = $this->saveUploadedPhoto($student->photo, $request->file('photo'), config('central.path.student_photo'), $filename);
            $student->save();
            $user->avatar = $this->saveAvatar($user->avatar, $request->file('photo'), $filename);
            $user->save();
        }

        notify('success', 'Berhasil memperbaharui data mahasiswa ' . $student->name);
        return redirect()->route('backend.students.show', [$student->id]);
    }

    public function destroy(Student $student)
    {
        if (!Gate::allows('students_manage')) {
            return abort(401);
        }

        $user = User::find($student->id);
        $student->delete();
        optional($user)->delete();

        notify('success', 'Berhasil menghapus data mahasiswa ' . $student->name);
        return redirect()->route('backend.students.index');
    }
}
