<!-- Nama Mahasiswa -->
<div class="form-group">
  <div class="form-label">Name</div>
  <div>{{ $detail->student->name }}</div>
</div>

<!-- NIM Mahasiswa -->
<div class="form-group">
  <div class="form-label">NIM</div>
  <div>{{ $detail->student->nim }}</div>
</div>

<!-- Status Mahasiswa -->
<div class="form-group">
  <div class="form-label">Status</div>
  <div>{{ $status_mahasiswa_kp[$detail->status] }}</div>
</div>

<!-- Bidang KP Mahasiswa -->
<div class="form-group">
  <div class="form-label">Bidang</div>
  <div>{{ $detail->field }}</div>
</div>

<!-- Tanggal Mulai dan Selesai KP -->
<div class="row">
  <div class="col-md-6">

    <div class="form-group">
      <div class="form-label">Tanggal Mulai</div>
      <div>{{ $detail->start_at }}</div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <div class="form-label">Tanggal Selesai</div>
      <div>{{ $detail->end_at }}</div>
    </div>
  </div>
</div>

<!-- Judul KP -->
<div class="form-group">
  <div class="form-label">Judul KP</div>
  <div>{{ $detail->title }}</div>
</div>

<!-- Nama Pembimbing -->
<div class="form-group">
  <div class="form-label">Pembimbing</div>
  <div>{{ $detail->field_advisor_name }} ({{ $detail->field_advisor_no }}) </div>
</div>

<!-- Contact Person Pembimbing -->
<div class="row">
  <div class="col-md-6">

    <div class="form-group">
      <div class="form-label">No HP</div>
      <div>{{ $detail->field_advisor_phone }}</div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <div class="form-label">Email</div>
      <div>{{ $detail->field_advisor_email }}</div>
    </div>
  </div>
</div>

<!-- Nilai -->
<div class="form-group">
  <div class="form-label">Nilai</div>
  <div>{{ $detail->grade }}</div>
</div>

<!-- Seminar -->
<div class="form-group">
  <div class="form-label">Nilai</div>
  <div>{{ $detail->grade }}</div>
</div>

<!-- Tanggal Buat dan Upload -->
<div class="row">
  <div class="col-md-6">

    <div class="form-group">
      <div class="form-label">Dibuat pada tanggal</div>
      <div>{{ $detail->created_at }}</div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <div class="form-label">Diupload pada tanggal</div>
      <div>{{ $detail->updated_at }}</div>
    </div>
  </div>
</div>
