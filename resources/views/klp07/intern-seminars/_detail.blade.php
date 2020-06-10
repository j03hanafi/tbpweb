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

<!-- Tanggal Seminar -->
<div class="form-group">
  <div class="form-label">Tanggal Seminar</div>
  <div>{{ $detail->seminar_date }}</div>
</div>

<!-- Waktu Seminar -->
<div class="form-group">
  <div class="form-label">Waktu Seminar</div>
  <div>{{ $detail->seminar_time }}</div>
</div>

<!-- Ruang Seminar -->
<div class="form-group">
  <div class="form-label">Ruang Seminar</div>
  <div>{{ $detail->room->name }}</div>
</div>

<!-- Gedung Seminar -->
<div class="form-group">
  <div class="form-label">Gedung Seminar</div>
  <div>{{ $detail->room->building->name }}</div>
</div>
