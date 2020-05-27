@extends('layouts.admin')

@section('breadcrumb')
  {!! cui()->breadcrumb([
    'Home' => route('home'),
    'Mahasiswa' => route('backend.interns.index'),
    'Edit' => '#'
  ]) !!}
@endsection

@section('toolbar')
  {!! cui()->toolbar_btn(route('backend.interns.index'), 'cil-list', 'List') !!}
@endsection

@section('content')
  @foreach($internship_edits as $edit)
  
  <div class="row">
    <div class="col">
      <div class="row">
        <div class="col-md-12">
          <div class="card">

            {{ html()->modelForm($edit, 'PUT', route('backend.interns.update', $edit->id))->open() }}

            <div class="card-header">
              <strong><i class="cil-pencil"></i> Edit Mahasiswa KP</strong>
            </div>

            <div class="card-body">
              @include('klp07.interns._form')
            </div>

            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="Simpan"/>
            </div>

            {{ html()->closeModelForm() }}
          </div>
        </div>
      </div>
    </div>
  </div>

  @endforeach
@endsection