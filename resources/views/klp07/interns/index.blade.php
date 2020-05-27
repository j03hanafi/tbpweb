@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Mahasiswa KP' => route('backend.interns.index'),
        'Index' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('backend.interns.index'), 'cil-user', 'Profile') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">

            {{-- CARD HEADER--}}
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        <strong><i class="cil-list"></i> List Mahasiswa KP</strong>
                    </div>
                    <div class="col-md text-right">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <strong><i class="cil-filter text-right"></i> Status</strong>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('backend.interns.index') }}?status=1">Sedang Dijalankan</a>
                                <a class="dropdown-item" href="{{ route('backend.interns.index') }}?status=2">Selesai</a>
                                <a class="dropdown-item" href="{{ route('backend.interns.index') }}">Reset</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CARD BODY--}}
            <div class="card-body">

                <div class="row justify-content-end">
                    <div class="col-md-6 justify-content-end">
                        <div class="row justify-content-end">
                            {{ $internships->links() }}
                        </div>
                    </div>
                </div>

                <table class="{{ config('style.table') }}" id="tbMahasiswaKp">

                    <thead class="{{ config('style.thead') }}">
                        <tr>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Nama Perusahaan</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($internships as $internship)
                        <tr>
                            <td class="text-center">
                                <strong>{{ $internship->student->name }}</strong> <br>
                                <p class="text-muted">{{ $internship->student->nim }}</p>
                            </td>
                            <td class="text-center">{{ $internship->proposal->agency->name }}</td>
                            <td class="text-center">{{ $internship->start_at }} s/d <br>{{ $internship->end_at }}</td>
                            <td class="text-center">{{ $status_mahasiswa_kp[$internship->status] }}</td>
                            <td class="text-center">
                            <a class="btn btn-outline-primary" href="{{ route('backend.interns.show',['intern' => $internship->id]) }}" role="button"><i class="cil-list"></i> Detail</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center" colspan="5">
                                <h6>Data tidak ada</h6>
                            </td>
                        </tr>
                        @endforelse

                    </tbody>

                </table>
            </div><!--card body-->
        </div><!--card-->
    </div><!--col-->
</div><!--row-->
@endsection