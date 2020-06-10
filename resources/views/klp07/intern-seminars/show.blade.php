@extends('layouts.admin')

@forelse($internship_details as $detail)

@section('breadcrumb')
  {!! cui()->breadcrumb([
    'Home' => route('home'),
    'Mahasiswa KP' => route('backend.interns.index'),
    'Detail' => route('backend.interns.show', $detail->id),
    'Seminar' => '#'
  ]) !!}
@endsection

@section('toolbar')
{!! cui()->toolbar_btn(route('backend.intern-seminars.edit', $detail->id), 'cil-pencil', 'Edit') !!}
{!! cui()->toolbar_btn(route('backend.interns.show', $detail->id), 'cil-list', 'Detail Mahasiswa') !!}
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col">
    <div class="row">
      <div class="col-md-4">
        <div class="card">

          {{-- CARD HEADER--}}
          <div class="card-header">
            <strong><i class="cil-zoom"></i> Detail Seminar KP</strong>
          </div>

          {{-- CARD BODY--}}
          <div class="card-body">
            @include('klp07.intern-seminars._detail')
          </div>

          {{--CARD FOOTER--}}
          <div class="card-footer"></div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card">
          {{-- CARD HEADER--}}
          <div class="card-header">

            <strong><i class="cil-people"></i> Daftar Audiens</strong>
            <div class="float-right">
              {!! cui()->toolbar_btn(route('backend.intern-seminars.audiences.create', $detail->id),  'cil-library-add', 'Tambah Audiens') !!}
            </div>

          </div>

          {{-- CARD BODY--}}
          <div class="card-body">
            @include('klp07.intern-seminars._audience')
          </div>

          {{--CARD FOOTER--}}
          <div class="card-footer">
            {{ $internship_audiences->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@empty
@endforelse
@endsection 