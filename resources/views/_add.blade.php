<!-- Nama Mahasiswa -->
<div class="form-group">

  <label for="nama_mahasiswa">Nama Mahasiswa</label>

  <select class="form-control" name="student_id" id="nama_mahasiswa">

  @foreach($student as $student)
    <option value="{{ $student->id }}">{{ $student->name}}</option>
  @endforeach
  </select> 

  @if ($errors->any())
  <div class="invalid-feedback"> sudah terdaftar sebagai audiens</div>
  @endif

</div>

<!-- ID Seminar -->
<div class="form-group">
  {{ html()->hidden('internship_id')->value(end($url))->class('internship_id')->id('internship_id') }}
</div> 