<?php

namespace App\Http\Controllers\Backend\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\Lecturer;
use App\Models\Room;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class InternshipController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
    public function index()
    {
        if (request()->has('status')) {
            $internships = Internship::where('status', request('status'))->paginate(10)->appends('status', request('status'));
        }
        else {
            $internships = Internship::paginate(10);
        }

        $status_mahasiswa_kp = config('central.status_mahasiswa_kp');

        return view('klp07.interns.index', compact('internships', 'status_mahasiswa_kp'));
    }

        // public function filter()
        // {
          // $internships = Internship::where('status', request('status'))
          //     ->paginate(10)->appends('status', request('status'));
    
        //     $internships = Internship::paginate(10);
    
        //     $status_mahasiswa_kp = config('central.status_mahasiswa_kp');
    
        //     return view('klp07.interns.index', compact('internships', 'status_mahasiswa_kp'));
        // }
    
    /**
     * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    //
    }
    
    /**
     * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
    //
    }
    
    /**
     * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $internship_details = Internship::where('id', $id)->get();
        $status_mahasiswa_kp = config('central.status_mahasiswa_kp');
    
        return view('klp07.interns.show', compact('internship_details', 'status_mahasiswa_kp'));
    }
    
    /**
     * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
    
        $internship_edits = Internship::where('id', $id)->get();
        $status_mahasiswa_kp = config('central.status_mahasiswa_kp');
        $advisor = Lecturer::select('id', 'name')->get();
        $room = Room::select('id', 'name')->get();
    
        return view('klp07.interns.edit', compact('internship_edits', 'status_mahasiswa_kp', 'advisor', 'room'));
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
    
        $this->validate($request, Internship::$validation_rules);
    
        $internship_updates = Internship::where('id', $id)->get();
    
        Internship::where('id', $id)->update($request->only(
            'status',
            'title',
            'field',
            'start_at',
            'end_at',
            'advisor_id',
            'field_advisor_name',
            'field_advisor_no',
            'field_advisor_phone',
            'field_advisor_email',
            'grade',
            'seminar_room_id',
            'seminar_date',
            'seminar_time'
        ));
    
        // update file_report_receipt
        if($request->hasFile('file_report_receipt')) {
    
            $file = $request->file('file_report_receipt');
            $filename = date('Y') . '_' . uniqid($id . '_') . '.' . $request->file('file_report_receipt')->getClientOriginalExtension();
    
            $file->storeAs(config('central.path.file_report_receipt'), $filename);
    
            Internship::where('id', $id)->update(['file_report_receipt' => $filename]);

        }

        // update file_field_grade
        if($request->hasFile('file_field_grade')) {

            $file = $request->file('file_field_grade');
            $filename = date('Y') . '_' . uniqid($id . '_') . '.' . $request->file('file_field_grade')->getClientOriginalExtension();

            $file->storeAs(config('central.path.file_field_grade'), $filename);

            Internship::where('id', $id)->update(['file_field_grade' => $filename]);

        }

        // update file_logbook
        if($request->hasFile('file_logbook')) {

            $file = $request->file('file_logbook');
            $filename = date('Y') . '_' . uniqid($id . '_') . '.' . $request->file('file_logbook')->getClientOriginalExtension();

            $file->storeAs(config('central.path.file_logbook'), $filename);

            Internship::where('id', $id)->update(['file_logbook' => $filename]);

        }

        // update file_seminar_attendance
        if($request->hasFile('file_seminar_attendance')) {

            $file = $request->file('file_seminar_attendance');
            $filename = date('Y') . '_' . uniqid($id . '_') . '.' . $request->file('file_seminar_attendance')->getClientOriginalExtension();

            $file->storeAs(config('central.path.file_seminar_attendance'), $filename);

            Internship::where('id', $id)->update(['file_seminar_attendance' => $filename]);

        }

        // update file_seminar_off_report
        if($request->hasFile('file_seminar_off_report')) {

            $file = $request->file('file_seminar_off_report');
            $filename = date('Y') . '_' . uniqid($id . '_') . '.' . $request->file('file_seminar_off_report')->getClientOriginalExtension();

            $file->storeAs(config('central.path.file_seminar_off_report'), $filename);

            Internship::where('id', $id)->update(['file_seminar_off_report' => $filename]);
    
        }

        // update file_certificate
        if($request->hasFile('file_certificate')) {

            $file = $request->file('file_certificate');
            $filename = date('Y') . '_' . uniqid($id . '_') . '.' . $request->file('file_certificate')->getClientOriginalExtension();

            $file->storeAs(config('central.path.file_certificate'), $filename);

            Internship::where('id', $id)->update(['file_certificate' => $filename]);

        }

        notify('success', 'Berhasil memperbaharui data');
        return redirect()->route('backend.interns.show', [$id]);

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