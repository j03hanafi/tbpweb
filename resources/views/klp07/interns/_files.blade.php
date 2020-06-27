<div class="form-group">
  <div class="form-label">File Report Receipt</div>
  @if(empty($detail->file_report_receipt))
  <div class="">
    <p>Belum ada file</p>
  </div>
  @else
  <div class="">
    <a href={{ asset('storage/interns/file_report_receipt/'. $detail->file_report_receipt) }}>Download</a>
  </div>
  @endif
</div>

<div class="form-group">
  <div class="form-label">File Field Grade</div>
  @if(empty($detail->file_field_grade))
  <div class="">
    <p>Belum ada file</p>
  </div>
  @else
  <div class="">
    <a href={{ asset('storage/interns/file_field_grade/'. $detail->file_field_grade) }}>Download</a>
  </div>
  @endif
</div>

<div class="form-group">
  <div class="form-label">File Logbook</div>
  @if(empty($detail->file_logbook))
  <div class="">
    <p>Belum ada file</p>
  </div>
  @else
  <div class="">
    <a href={{ asset('storage/interns/file_logbook/'. $detail->file_logbook) }}>Download</a>
  </div>
  @endif
</div>

<div class="form-group">
  <div class="form-label">File Seminar Attendance</div>
  @if(empty($detail->file_seminar_attendance))
  <div class="">
    <p>Belum ada file</p>
  </div>
  @else
  <div class="">
    <a href={{ asset('storage/interns/file_seminar_attendance/'. $detail->file_seminar_attendance) }}>Download</a>
  </div>
  @endif
</div>

<div class="form-group">
  <div class="form-label">File Seminar Off Report</div>
  @if(empty($detail->file_seminar_off_report))
  <div class="">
    <p>Belum ada file</p>
  </div>
  @else
  <div class="">
    <a href={{ asset('storage/interns/file_seminar_off_report/'. $detail->file_seminar_off_report) }}>Download</a>
  </div>
  @endif
</div>

<div class="form-group">
  <div class="form-label">File Certificate</div>
  @if(empty($detail->file_certificate))
  <div class="">
    <p>Belum ada file</p>
  </div>
  @else
  <div class="">
    <a href={{ asset('storage/interns/file_certificate/'. $detail->file_certificate) }}>Download</a>
  </div>
  @endif
</div>
