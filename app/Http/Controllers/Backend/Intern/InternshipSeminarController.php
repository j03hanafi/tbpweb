<?php

namespace App\Http\Controllers\Backend\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\InternshipAudience;
use App\Models\Room;

class InternshipSeminarController extends Controller
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
        $internship_audiences = InternshipAudience::where('internship_id', $id)->paginate(5);
        $status_mahasiswa_kp = config('central.status_mahasiswa_kp');

        return view('klp07.intern-seminars.show', compact('internship_details', 'internship_audiences', 'status_mahasiswa_kp'));
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
        $room = Room::select('id', 'name')->get();

        return view('klp07.intern-seminars.edit', compact('internship_edits', 'room'));
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
        
        $this->validate($request, Internship::$validation_seminar);

        Internship::where('id', $id)->update($request->only(
            'seminar_date',
            'seminar_time',
            'seminar_room_id'
        ));

        notify('success', 'Berhasil memperbaharui data');
        return redirect()->route('backend.intern-seminars.show', [$id]);
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
