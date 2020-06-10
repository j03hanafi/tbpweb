<?php

namespace App\Http\Controllers\Backend\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\Student;
use App\Models\InternshipAudience;
use Illuminate\Support\Facades\URL;

class InternshipSeminarAudienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url_current = URL::current();
        $url = explode('/', $url_current, -2);

        $student = Student::select('students.id', 'name')->leftJoin('internship_audiences', 'students.id', '=', 'internship_audiences.student_id')->whereNull('internship_audiences.student_id')->get();

        return view('klp07.intern-seminars.create', compact('url', 'student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        InternshipAudience::insertGetId([
            'internship_id' => $request->internship_id,
            'student_id' => $request->student_id
        ]);

        notify('success', 'Berhasil memperbaharui data');
        return redirect()->route('backend.intern-seminars.show', [$request->internship_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
