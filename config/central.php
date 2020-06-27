<?php

return [
    'default_paginate_item' => 50,

    'photo_size' => [
        's' => '60',
        'm' => '200',
        'l' => '450'
    ],

    'system_roles' => [
        'administrator' => 'admin',
        'lecturer' => 'dosen',
        'student' => 'mahasiswa',
        'staff' => 'tendik'
    ],

    'path' => [
        'avatar' => 'avatar/',
        'user_photo' => 'photo/',
        'staff_photo' => 'photo/tendik',
        'lecturer_photo' => 'photo/lecturer',
        'student_photo' => 'photo/student',
        'ijazah' => 'ijazah',
        'thesis_logbook_file_progress' => 'logbook/thesis',
        'file_report_receipt' => 'public/interns/file_report_receipt',
        'file_field_grade' => 'public/interns/file_field_grade',
        'file_logbook' => 'public/interns/file_logbook',
        'file_seminar_attendance' => 'public/interns/file_seminar_attendance',
        'file_seminar_off_report' => 'public/interns/file_seminar_off_report',
        'file_certificate' => 'public/interns/file_certificate'

    ],

    'position' => [
        1 => 'Ketua',
        2 => 'Anggota',
    ],

    'family_relationship' => [
        1 => 'Suami/Istri',
        2 => 'Ayah/Ibu',
        3 => 'Ayah/Ibu Mertua',
        4 => 'Anak Kandung',
        5 => 'Saudara Kandung',
        6 => 'Anak Angkat'
    ],

    'gender' => [
        1 => 'Pria',
        2 => 'Wanita',
    ],

    'marital_status' => [
        1 => 'Belum Menikah',
        2 => 'Menikah',
        3 => 'Janda/Duda'
    ],

    'religion' => [
        1 => 'Islam',
        2 => 'Kristen Protestan',
        3 => 'Kristen Katolik',
        4 => 'Hindu',
        5 => 'Budha'
    ],

    'alive_status' => [
        0 => 'Meninggal',
        1 => 'Masih Hidup'
    ],

    'domestic' => [
        0 => 'Dalam Negri',
        1 => 'Luar Negri'
    ],

    'research_position' => [
        1 => 'Ketua',
        2 => 'Anggota'
    ],

    'education_level' => [
        1 => 'TK',
        2 => 'SD Sederajat',
        3 => 'SMP Sederajat',
        4 => 'SMA Sederajat',
        5 => 'D1',
        6 => 'D2',
        7 => 'D3',
        8 => 'D4',
        9 => 'S1',
        10 => 'S2',
        11 => 'S3'
    ],

    'attendance_student' => [
        0 => 'Absen',
        1 => 'Hadir',
        2 => 'Absen',
        3 => 'Izin',
        4 => 'Sakit'],

    'thesis_supervisor_position' => [
        1 => 'Pembimbing Tunggal',
        2 => 'Pembimbing Utama',
        3 => 'Pembimbing Pendamping'
    ],

    'thesis_supervisor_status' => [
        0 => 'Submitted',
        1 => 'Accepted',
        2 => 'Rejected'
    ],

    'status_mahasiswa_kp' => [
        1 => 'Pengajuan Proposal',
        2 => 'Sedang KP',
        3 => 'Bimbingan KP',
        4 => 'Seminar KP',
        5 => 'Selesai KP',
        6 => 'Batal/Gagal'
    ]
];
