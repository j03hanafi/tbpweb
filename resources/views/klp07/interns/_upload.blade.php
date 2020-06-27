<!-- File Report Receipt -->
<div class="form-group">
  <div class="form-label" for="file_report_receipt">File Report Receipt</div>
  {{ html()->file('file_report_receipt')->class(["form-control-file", "is-invalid" => $errors->has('file_report_receipt')])->id('file_report_receipt') }}
  @error('file_report_receipt')
  <div class="invalid-feedback">{{ $errors->first('file_report_receipt') }}</div>
  @enderror
</div>

<!-- File Field Grade -->
<div class="form-group">
  <div class="form-label" for="file_field_grade">File Field Grade</div>
  {{ html()->file('file_field_grade')->class(["form-control-file", "is-invalid" => $errors->has('file_field_grade')])->id('file_field_grade') }}
  @error('file_field_grade')
  <div class="invalid-feedback">{{ $errors->first('file_field_grade') }}</div>
  @enderror
</div>

<!-- File Logbook -->
<div class="form-group">
  <div class="form-label" for="file_logbook">File Logbook</div>
  {{ html()->file('file_logbook')->class(["form-control-file", "is-invalid" => $errors->has('file_logbook')])->id('file_logbook') }}
  @error('file_logbook')
  <div class="invalid-feedback">{{ $errors->first('file_logbook') }}</div>
  @enderror
</div>

<!-- File Seminar Attendance -->
<div class="form-group">
  <div class="form-label" for="file_seminar_attendance">File Seminar Attendance</div>
  {{ html()->file('file_seminar_attendance')->class(["form-control-file", "is-invalid" => $errors->has('file_seminar_attendance')])->id('file_seminar_attendance') }}
  @error('file_seminar_attendance')
  <div class="invalid-feedback">{{ $errors->first('file_seminar_attendance') }}</div>
  @enderror
</div>

<!-- File Seminar Off Report -->
<div class="form-group">
  <div class="form-label" for="file_seminar_off_report">File Seminar Off Report</div>
  {{ html()->file('file_seminar_off_report')->class(["form-control-file", "is-invalid" => $errors->has('file_seminar_off_report')])->id('file_seminar_off_report') }}
  @error('file_seminar_off_report')
  <div class="invalid-feedback">{{ $errors->first('file_seminar_off_report') }}</div>
  @enderror
</div>

<!-- File Certificate -->
<div class="form-group">
  <div class="form-label" for="file_certificate">File Certificate</div>
  {{ html()->file('file_certificate')->class(["form-control-file", "is-invalid" => $errors->has('file_certificate')])->id('file_certificate') }}
  @error('file_certificate')
  <div class="invalid-feedback">{{ $errors->first('file_certificate') }}</div>
  @enderror
</div>