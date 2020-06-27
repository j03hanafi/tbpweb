<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{

    static $validation_rules = [
        'file_report_receipt' => 'nullable|max:10000',
        'file_field_grade' => 'nullable|max:10000',
        'file_logbook' => 'nullable|max:10000',
        'file_seminar_attendance' => 'nullable|max:10000',
        'file_seminar_off_report' => 'nullable|max:10000',
        'file_certificate' => 'nullable|max:10000'
    ];

    static $validation_seminar = [
        'seminar_room' => 'required',
        'seminar_building' => 'required',
        'seminar_room_id' => 'required'
    ];

    public function proposal()
    {
        return $this->belongsTo(InternshipProposal::class, 'internship_proposal_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'seminar_room_id', 'id');
    }

    public function advisor()
    {
        return $this->belongsTo(Lecturer::class, 'advisor_id', 'id');
    }
}
