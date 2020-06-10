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

<!-- Tanggal Seminar -->
<div class="form-group">
  <div class="form-label" for="seminar_date">Tanggal Seminar</div>
  {{ html()->date('seminar_date')->value($edit->seminar_date)->id('seminar_date') }}
</div>

<!-- Waktu Seminar -->
<div class="form-group">
  <div class="form-label" for="seminar_time">Waktu Seminar</div>
  {{ html()->time('seminar_time')->value($edit->seminar_time)->id('seminar_time') }}
</div>

<!-- Ruang Seminar -->
<div class="form-group">
  <div class="form-label" for="seminar_room">Ruang Seminar</div>
  {{ html()->text('seminar_room')->value($edit->room->name)->class(["form-control", "is-invalid" => $errors->has('seminar_room')])->id('seminar_room')->placeholder('Ruang Seminar') }}
  @error('seminar_room')
  <div class="invalid-feedback">{{ $errors->first('seminar_room') }}</div>
  @enderror
</div>

<!-- Gedung Seminar -->
<div class="form-group">
  <div class="form-label" for="seminar_building">Gedung Seminar</div>
  {{ html()->text('seminar_building')->value($edit->room->building->name)->class(["form-control", "is-invalid" => $errors->has('seminar_building')])->id('seminar_building')->placeholder('Gedung Seminar') }}
  @error('seminar_building')
  <div class="invalid-feedback">{{ $errors->first('seminar_building') }}</div>
  @enderror
</div>

<!-- seminar_room_id -->
<div class="form-group">
  {{ html()->hidden('seminar_room_id')->value($edit->seminar_room_id)->class('seminar_room_id')->id('seminar_room_id') }}
</div>
