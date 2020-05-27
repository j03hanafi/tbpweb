<!-- Nama Mahasiswa -->
<div class="form-group">
  <div class="form-label">Name</div>
  <div>{{ $edit->student->name }}</div>
</div>

<!-- NIM Mahasiswa -->
<div class="form-group">
  <div class="form-label">NIM</div>
  <div>{{ $edit->student->nim }}</div>
</div>

<!-- Status Mahasiswa -->
<div class="form-group">
  <div class="form-label" for="status">Status</div>
  <div class="form-check">
    {{ html()->radio('status')->value(1)->class(["form-check-input"])->id('status_1')->checked(old('status', $edit->status === 1)) }}
    <label class="form-check-label" for="status_1">
      Sedang Dijalankan
    </label>
  </div>
  <div class="form-check">
    {{ html()->radio('status')->value(2)->class(["form-check-input"])->id('status_2')->checked(old('status', $edit->status === 2)) }}
    <label class="form-check-label" for="status_2">
      Selesai
    </label>
  </div>
</div>

<!-- Bidang KP Mahasiswa -->
<div class="form-group">
  <div class="form-label" for="field">Bidang KP Mahasiswa</div>
  {{ html()->text('field')->value($edit->field)->class(["form-control", "is-invalid" => $errors->has('field')])->id('field')->placeholder('Bidang KP Mahasiswa') }}
  @error('field')
  <div class="invalid-feedback">{{ $errors->first('field') }}</div>
  @enderror
</div>

<!-- Tanggal Mulai dan Selesai KP -->
<div class="form-group">
  <div class="row">
    <div class="col-md-6">

      <div class="form-label" for="start_at">Tanggal Mulai</div>
      {{ html()->date('start_at')->value($edit->start_at)->id('start_at') }}

    </div>
    <div class="col-md-6">
    
      <div class="form-label" for="end_at">Tanggal Selesai</div>
      {{ html()->date('end_at')->value($edit->end_at)->id('end_at') }}

    </div>
  </div>
</div>

<!-- Nama Pekerjaan -->
<div class="form-group">
  <div class="form-label" for="title">Pekerjaan</div>
  {{ html()->text('title')->value($edit->title)->class(["form-control", "is-invalid" => $errors->has('title')])->id('title')->placeholder('Pekerjaan') }}
  @error('title')
  <div class="invalid-feedback">{{ $errors->first('title') }}</div>
  @enderror
</div>

<!-- Nama Pembimbing -->
<div class="form-group">
  <div class="row">
    <div class="col-md-6">

      <div class="form-label" for="field_advisor_name">Nama Pembimbing</div>
      {{ html()->text('advisor_name')->value($edit->field_advisor_name)->class(["form-control", "is-invalid" => $errors->has('advisor_name')])->id('advisor_name')->placeholder('Nama Pembimbing') }}
      @error('advisor_name')
      <div class="invalid-feedback">{{ $errors->first('advisor_name') }}</div>
      @enderror

    </div>
    <div class="col-md-6">
    
      <div class="form-label" for="field_advisor_no">No Pembimbing</div>
      {{ html()->text('advisor_no')->value($edit->field_advisor_no)->class(["form-control", "is-invalid" => $errors->has('advisor_no')])->id('advisor_no')->placeholder('No Pembimbing') }}
      @error('advisor_no')
      <div class="invalid-feedback">{{ $errors->first('advisor_no') }}</div>
      @enderror

    </div>
  </div>
</div>

<!-- Contact Person Pembimbing -->
<div class="form-group">
  <div class="row">
    <div class="col-md-6">

      <div class="form-label" for="field_advisor_phone">No HP Pembimbing</div>
      {{ html()->text('advisor_phone')->value($edit->field_advisor_phone)->class(["form-control", "is-invalid" => $errors->has('advisor_phone')])->id('advisor_phone')->placeholder('No HP Pembimbing') }}
      @error('advisor_phone')
      <div class="invalid-feedback">{{ $errors->first('advisor_phone') }}</div>
      @enderror

    </div>
    <div class="col-md-6">
    
      <div class="form-label" for="field_advisor_email">Email Pembimbing</div>
      {{ html()->text('advisor_email')->value($edit->field_advisor_email)->class(["form-control", "is-invalid" => $errors->has('advisor_email')])->id('advisor_email')->placeholder('Email Pembimbing') }}
      @error('advisor_email')
      <div class="invalid-feedback">{{ $errors->first('advisor_email') }}</div>
      @enderror

    </div>
  </div>
</div>

<!-- Nilai -->
<div class="form-group">
  <div class="form-label" for="grade">Nilai</div>
  {{ html()->text('grade')->value($edit->grade)->class(["form-control", "is-invalid" => $errors->has('grade')])->id('grade')->placeholder('Nilai') }}
  @error('grade')
  <div class="invalid-feedback">{{ $errors->first('grade') }}</div>
  @enderror
</div>

<!-- files -->
<div class="form-group">
  <div class="row">
    
    <div class="col-md-2">
    
      <div class="form-label" for="file_report_receipt">File Report Receipt</div>

    </div>
    
    <div class="col-md-2">
    
      <div class="form-label" for="file_field_grade">File Field Grade</div>

    </div>
    
    <div class="col-md-2">
    
      <div class="form-label" for="file_logbook">File Logbook</div>

    </div>
    
    <div class="col-md-2">
    
      <div class="form-label" for="file_seminar_attendance">File Seminar Attendance</div>

    </div>
    
    <div class="col-md-2">
    
      <div class="form-label" for="file_seminar_off_report">File Seminar Off Report</div>

    </div>
    
    <div class="col-md-2">
    
      <div class="form-label" for="file_certificate">File Certificate</div>

    </div>
  </div>
  <div class="row">
    
    <div class="col-md-2">
    
      {{ html()->text('file_report_receipt')->value($edit->file_report_receipt)->class(["form-control", "is-invalid" => $errors->has('file_report_receipt')])->id('file_report_receipt')->placeholder('File Report Receipt') }}
      @error('file_report_receipt')
      <div class="invalid-feedback">{{ $errors->first('file_report_receipt') }}</div>
      @enderror

    </div>
    
    <div class="col-md-2">
    
      {{ html()->text('file_field_grade')->value($edit->file_field_grade)->class(["form-control", "is-invalid" => $errors->has('file_field_grade')])->id('file_field_grade')->placeholder('File Field Grade') }}
      @error('file_field_grade')
      <div class="invalid-feedback">{{ $errors->first('file_field_grade') }}</div>
      @enderror

    </div>
    
    <div class="col-md-2">
    
      {{ html()->text('file_logbook')->value($edit->file_logbook)->class(["form-control", "is-invalid" => $errors->has('file_logbook')])->id('file_logbook')->placeholder('File Logbook') }}
      @error('file_logbook')
      <div class="invalid-feedback">{{ $errors->first('file_logbook') }}</div>
      @enderror

    </div>
    
    <div class="col-md-2">
    
      {{ html()->text('file_seminar_attendance')->value($edit->file_seminar_attendance)->class(["form-control", "is-invalid" => $errors->has('file_seminar_attendance')])->id('file_seminar_attendance')->placeholder('File Seminar Attendance') }}
      @error('file_seminar_attendance')
      <div class="invalid-feedback">{{ $errors->first('file_seminar_attendance') }}</div>
      @enderror

    </div>
    
    <div class="col-md-2">
    
      {{ html()->text('file_seminar_off_report')->value($edit->field_advisor_email)->class(["form-control", "is-invalid" => $errors->has('file_seminar_off_report')])->id('file_seminar_off_report')->placeholder('File Seminar Off Report') }}
      @error('file_seminar_off_report')
      <div class="invalid-feedback">{{ $errors->first('file_seminar_off_report') }}</div>
      @enderror

    </div>
    
    <div class="col-md-2">
    
      {{ html()->text('file_certificate')->value($edit->file_certificate)->class(["form-control", "is-invalid" => $errors->has('file_certificate')])->id('file_certificate')->placeholder('File Certificate') }}
      @error('file_certificate')
      <div class="invalid-feedback">{{ $errors->first('file_certificate') }}</div>
      @enderror

    </div>
  </div>
</div>

<!-- Tanggal Buat dan Upload -->
<!-- <div class="form-group">
  <div class="row">
    <div class="col-md-6">

      <div class="form-label" for="created_at">Dibuat pada tanggal</div>
      //{{ html()->date('created_at')->value($edit->created_at)->id('created_at') }}

    </div>
    <div class="col-md-6">
    
      <div class="form-label" for="updated_at">Diupload pada tanggal</div>
      //{{ html()->date('updated_at')->value($edit->updated_at)->id('updated_at') }}

    </div>
  </div>
</div> -->