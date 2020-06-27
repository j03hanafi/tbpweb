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
      Pengajuan Proposal
    </label>
  </div>
  <div class="form-check">
    {{ html()->radio('status')->value(2)->class(["form-check-input"])->id('status_2')->checked(old('status', $edit->status === 2)) }}
    <label class="form-check-label" for="status_2">
      Sedang KP
    </label>
  </div>
  <div class="form-check">
    {{ html()->radio('status')->value(3)->class(["form-check-input"])->id('status_3')->checked(old('status', $edit->status === 3)) }}
    <label class="form-check-label" for="status_3">
      Bimbingan KP
    </label>
  </div>
  <div class="form-check">
    {{ html()->radio('status')->value(4)->class(["form-check-input"])->id('status_4')->checked(old('status', $edit->status === 4)) }}
    <label class="form-check-label" for="status_4">
      Seminar KP 
    </label>
  </div>
  <div class="form-check">
    {{ html()->radio('status')->value(5)->class(["form-check-input"])->id('status_5')->checked(old('status', $edit->status === 5)) }}
    <label class="form-check-label" for="status_5">
      Selesai KP
    </label>
  </div>
  <div class="form-check">
    {{ html()->radio('status')->value(6)->class(["form-check-input"])->id('status_6')->checked(old('status', $edit->status === 6)) }}
    <label class="form-check-label" for="status_6">
      Batal/Gagal
    </label>
  </div>
</div>

<!-- Judul KP -->
<div class="form-group">
  <div class="form-label" for="title">Judul KP</div>
  {{ html()->text('title')->value($edit->title)->class(["form-control", "is-invalid" => $errors->has('title')])->id('title')->placeholder('Judul KP') }}
  @error('title')
  <div class="invalid-feedback">{{ $errors->first('title') }}</div>
  @enderror
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

      <label class="form-label" for="start_at">Tanggal Mulai</label>
      {{ html()->date('start_at')->class(["form-control", "is-invalid" => $errors->has('start_at')])->id('start_at')->value($edit->start_at) }}
      @error('start_at')
      <div class="invalid-feedback">{{ $errors->first('start_at') }}</div>
      @enderror

    </div>
    <div class="col-md-6">

      <label class="form-label" for="end_at">Tanggal Selesai</label>
      {{ html()->date('end_at')->class(["form-control", "is-invalid" => $errors->has('end_at')])->id('end_at')->value($edit->end_at) }}
      @error('end_at')
      <div class="invalid-feedback">{{ $errors->first('end_at') }}</div>
      @enderror

    </div>
  </div>
</div>

<!-- Pembimbing -->
<div class="form-group">

  <div class="form-label" for="advisor_id">Pembimbing</div>

  <select class="form-control" name="advisor_id" id="advisor_id">

  @foreach($advisor as $advisor)
    @if($edit->advisor_id != $advisor->id)
    <option value="{{ $advisor->id }}">{{ $advisor->name}}</option>
    @else
    <option value="{{ $advisor->id }}" selected="selected">{{ $advisor->name}}</option>
    @endif
  @endforeach
  </select> 

  @if ($errors->any())
  <div class="invalid-feedback"> sudah terdaftar sebagai pembimbing</div>
  @endif

</div>

<!-- Nama Pembimbing Lapangan -->
<div class="form-group">
  <div class="row">
    <div class="col-md-6">

      <div class="form-label" for="field_advisor_name">Nama Pembimbing Lapangan</div>
      {{ html()->text('field_advisor_name')->value($edit->field_advisor_name)->class(["form-control", "is-invalid" => $errors->has('field_advisor_name')])->id('field_advisor_name')->placeholder('Nama Pembimbing Lapangan') }}
      @error('field_advisor_name')
      <div class="invalid-feedback">{{ $errors->first('field_advisor_name') }}</div>
      @enderror

    </div>
    <div class="col-md-6">

      <div class="form-label" for="field_advisor_no">No Pembimbing Lapangan</div>
      {{ html()->text('field_advisor_no')->value($edit->field_field_advisor_no)->class(["form-control", "is-invalid" => $errors->has('field_advisor_no')])->id('field_advisor_no')->placeholder('No Pembimbing Lapangan') }}
      @error('field_advisor_no')
      <div class="invalid-feedback">{{ $errors->first('field_advisor_no') }}</div>
      @enderror

    </div>
  </div>
</div>

<!-- Contact Person Pembimbing -->
<div class="form-group">
  <div class="row">
    <div class="col-md-6">

      <div class="form-label" for="field_advisor_phone">No HP Pembimbing Lapangan</div>
      {{ html()->text('field_advisor_phone')->value($edit->field_advisor_phone)->class(["form-control", "is-invalid" => $errors->has('field_advisor_phone')])->id('field_advisor_phone')->placeholder('No HP Pembimbing Lapangan') }}
      @error('field_advisor_phone')
      <div class="invalid-feedback">{{ $errors->first('field_advisor_phone') }}</div>
      @enderror

    </div>
    <div class="col-md-6">

      <div class="form-label" for="field_advisor_email">Email Pembimbing Lapangan</div>
      {{ html()->text('field_advisor_email')->value($edit->field_advisor_email)->class(["form-control", "is-invalid" => $errors->has('field_advisor_email')])->id('field_advisor_email')->placeholder('Email Pembimbing Lapangan') }}
      @error('field_advisor_email')
      <div class="invalid-feedback">{{ $errors->first('field_advisor_email') }}</div>
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
  <div class="invalid-feedback"> sudah terdaftar sebagai pembimbing</div>
  @endif

</div>

<!-- Informasi Seminar -->
<div class="form-group">
  <div class="row">
    <div class="col-md-6">

      <label class="form-label" for="seminar_date">Tanggal Seminar</label>
      {{ html()->date('seminar_date')->class(["form-control", "is-invalid" => $errors->has('seminar_date')])->id('seminar_date')->value($edit->seminar_date) }}
      @error('seminar_date')
      <div class="invalid-feedback">{{ $errors->first('seminar_date') }}</div>
      @enderror

    </div>
    <div class="col-md-6">

      <label class="form-label" for="seminar_time">Waktu Seminar</label>
      {{ html()->time('seminar_time')->class(["form-control", "is-invalid" => $errors->has('seminar_time')])->id('seminar_time')->value($edit->seminar_time) }}
      @error('seminar_time')
      <div class="invalid-feedback">{{ $errors->first('seminar_time') }}</div>
      @enderror

    </div>
  </div>
</div>