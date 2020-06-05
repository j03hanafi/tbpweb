@extends('layouts.admin')

@section('breadcrumb')
  {!! cui()->breadcrumb([
    'Home' => route('home'),
    'Mahasiswa KP' => route('backend.interns.index'),
    'Detail' => '#'
  ]) !!}
@endsection

@forelse($internship_details as $detail)

@section('toolbar')
{!! cui()->toolbar_btn(route('backend.interns.edit', $detail->id), 'cil-pencil', 'Edit') !!}
  {!! cui()->toolbar_btn(route('backend.intern-seminars.show', $detail->id), 'cil-list', 'Seminar KP') !!}
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col">
    <div class="row">
      <div class="col-md-9">
        <div class="card">

          {{-- CARD HEADER--}}
          <div class="card-header">
            <strong><i class="cil-zoom"></i> Detail Mahasiswa KP</strong>
          </div>

          {{-- CARD BODY--}}
          <div class="card-body">
            @include('klp07.interns._detail')
          </div>

          {{--CARD FOOTER--}}
          <div class="card-footer"></div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <strong><i class="cil-file"></i> Files</strong>
          </div>
          <div class="card-body">
            @include('klp07.interns._files')
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@empty
@endforelse
@endsection