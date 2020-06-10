@extends('layouts.admin')

@section('breadcrumb')
  {!! cui()->breadcrumb([
    'Home' => route('home'),
    'Mahasiswa' => route('backend.interns.index'),
    'Detail' => route('backend.interns.show', end($url)),
    'Seminar' => route('backend.intern-seminars.show', end($url)),
    'Create' => '#'
  ]) !!}
@endsection

@section('content')

<div class="row">
    <div class="col">
      <div class="row">
        <div class="col-md-12">
          <div class="card">

            {{ html()->form('POST', route('backend.intern-seminars.audiences.store', end($url)))->open() }}

            <div class="card-header">
              <strong><i class="cil-pencil"></i> Tambah Audiens</strong>
            </div>

            <div class="card-body">
              @include('klp07.intern-seminars._add')
            </div>

            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="Tambah"/>
              <a class="btn btn-outline-danger" href="{{ route('backend.intern-seminars.show', end($url)) }}" role="button">Kembali</a>
            </div>

            {{ html()->closeModelForm() }}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
