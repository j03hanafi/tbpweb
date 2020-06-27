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
  <label class="form-label" for="seminar_date">Tanggal Seminar</label>
  {{ html()->date('seminar_date')->class(["form-control", "is-invalid" => $errors->has('seminar_date')])->id('seminar_date')->value($edit->seminar_date) }}
  @error('seminar_date')
  <div class="invalid-feedback">{{ $errors->first('seminar_date') }}</div>
  @enderror
</div>

<!-- Waktu Seminar -->
<div class="form-group">
  <label class="form-label" for="seminar_time">Waktu Seminar</label>
  {{ html()->time('seminar_time')->class(["form-control", "is-invalid" => $errors->has('seminar_time')])->id('seminar_time')->value($edit->seminar_time) }}
  @error('seminar_time')
  <div class="invalid-feedback">{{ $errors->first('seminar_time') }}</div>
  @enderror
</div>

<!-- Ruang Seminar -->
<div class="form-group">

  <div class="form-label" for="seminar_room_id">Ruang Seminar</div>

  <select class="form-control" name="seminar_room_id" id="seminar_room_id">

  @foreach($room as $room)
    @if($edit->seminar_room_id != $room->id)
    <option value="{{ $room->id }}">{{ $room->name}}</option>
    @else
    <option value="{{ $room->id }}" selected="selected">{{ $room->name}}</option>
    @endif
  @endforeach
  </select> 

  @if ($errors->any())
  <div class="invalid-feedback"> sudah dipilih sebagai ruang seminar</div>
  @endif

</div>
