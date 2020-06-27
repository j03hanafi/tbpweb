@extends('layouts.admin')

@foreach($internship_edits as $edit)

@section('breadcrumb')
  {!! cui()->breadcrumb([
    'Home' => route('home'),
    'Mahasiswa' => route('backend.interns.index'),
    'Detail' => route('backend.interns.show', $edit->id),
    'Edit' => '#'
  ]) !!}
@endsection

@section('toolbar')
  {!! cui()->toolbar_btn(route('backend.interns.show', $edit->id), 'cil-list', 'Kembali') !!}
@endsection

@section('content')

  <div class="row">
    <div class="col">
      <div class="row">
        <div class="col-md-9">
          <div class="card">

            {{ html()->modelForm($edit, 'PUT', route('backend.interns.update', $edit->id))->acceptsFiles()->open() }}

            <div class="card-header">
              <strong><i class="cil-pencil"></i> Edit Mahasiswa KP</strong>
            </div>

            <div class="card-body">
              @include('klp07.interns._form')
            </div>
          </div>
        </div>

              <!-- Upload File -->
            <div class="col-md-3">
              <div class="card">
                <div class="card-header">
                  <strong><i class="cil-pencil"></i> Upload File KP</strong>
                </div>

                <div class="card-body">
                  @include('klp07.interns._upload')
                </div>
              </div>
            </div>

        <div class="col-md-9">   
          <div class="card">

            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="Simpan"/>
              <a class="btn btn-outline-danger" href="{{ route('backend.interns.show', $edit->id) }}" role="button">Kembali</a>
            </div>

            {{ html()->closeModelForm() }}
          </div>
        </div>
      </div>
    </div>
  </div>

  @endforeach
@endsection 
