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
        $internship_audiences = InternshipAudience::where('internship_id', $id)->paginate(10);

        return view('klp07.intern-seminars.show', compact('internship_details', 'internship_audiences'));
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

        return view('klp07.intern-seminars.edit', compact('internship_edits'));
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

        $internship = Internship::find($id);

        $internship->room()->update([
            'name' => $request->seminar_room
        ]);

        $room = Room::find($request->seminar_room_id);

        $room->building()->update([
            'name' => $request->seminar_building
        ]);

        $internship_updates = Internship::where('id', $id)->get();

        Internship::where('id', $id)->update($request->only(
            'seminar_date',
            'seminar_time'
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
