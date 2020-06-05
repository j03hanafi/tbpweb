@extends('layouts.admin')

@foreach($internship_edits as $edit)

@section('breadcrumb')
  {!! cui()->breadcrumb([
    'Home' => route('home'),
    'Mahasiswa' => route('backend.interns.index'),
    'Detail' => route('backend.interns.show', $edit->id),
    'Seminar' => route('backend.intern-seminars.show', $edit->id),
    'Edit' => '#'
  ]) !!}
@endsection

@section('toolbar')
  {!! cui()->toolbar_btn(route('backend.intern-seminars.show', $edit->id), 'cil-list', 'Kembali') !!}
@endsection

@section('content')
  
  <div class="row">
    <div class="col">
      <div class="row">
        <div class="col-md-12">
          <div class="card">

            {{ html()->modelForm($edit, 'PUT', route('backend.intern-seminars.update', $edit->id))->open() }}

            <div class="card-header">
              <strong><i class="cil-pencil"></i> Edit Seminar KP</strong>
            </div>

            <div class="card-body">
              @include('klp07.intern-seminars._form')
            </div>

            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="Simpan"/>
              <a class="btn btn-outline-danger" href="{{ route('backend.intern-seminars.show', $edit->id) }}" role="button">Kembali</a>
            </div>

            {{ html()->closeModelForm() }}
          </div>
        </div>
      </div>
    </div>
  </div>

  @endforeach
@endsection