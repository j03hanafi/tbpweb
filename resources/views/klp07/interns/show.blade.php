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
  {!! cui()->toolbar_btn(route('backend.interns.index'), 'cil-list', 'List Mahasiswa KP') !!}
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col">
    <div class="row">
      <div class="col-md-12">
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
    </div>
  </div>
</div>


@empty
@endforelse
@endsection