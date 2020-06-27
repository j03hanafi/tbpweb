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
  @if(empty($detail->advisor_id))
  <div><p>Belum ada pembimbing</p></div>
  @else
  <div>{{ $detail->advisor->name }} ({{ $detail->advisor->nip }}) </div>
  @endif
</div>

<!-- Nama Pembimbing Lapangan -->
<div class="form-group">
  <div class="form-label">Pembimbing Lapangan</div>
  @if(empty($detail->field_advisor_name))
  <div>
    <p>Belum ada pembimbing Lapangan</p>
  </div>
</div>
  @else
  <div>{{ $detail->field_advisor_name }} ({{ $detail->field_advisor_no }}) </div>
</div>

<!-- Contact Person Pembimbing -->
<div class="row">
  <div class="col-md-6">

    <div class="form-group">
      <div class="form-label">No HP Pembimbing Lapangan</div>
      <div>{{ $detail->field_advisor_phone }}</div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <div class="form-label">Email Pembimbing Lapangan</div>
      <div>{{ $detail->field_advisor_email }}</div>
    </div>
  </div>
</div>
  @endif

<!-- Nilai -->
<div class="form-group">
  <div class="form-label">Nilai</div>
  <div>{{ $detail->grade }}</div>
</div>

<!-- Ruang Seminar -->
<div class="form-group">
  <div class="form-label">Ruang Seminar</div>
  @if(empty($detail->seminar_room_id))
  <div><p>Ruangan belum dipilih</p></div>
  @else
  <div>{{ $detail->seminar_room_id }}</div>
  @endif
</div> 

<!-- Informasi seminar -->
<div class="row">

  <div class="col-md-6">
    <div class="form-group">
      <div class="form-label">Tanggal Seminar</div>
      <div>{{ $detail->seminar_date }}</div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <div class="form-label">Waktu Seminar</div>
      <div>{{ $detail->seminar_time }}</div>
    </div>
  </div>


</div>
