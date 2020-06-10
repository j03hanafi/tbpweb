@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Mahasiswa' => route('backend.students.index'),
        'Index' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('backend.students.create'), 'cil-library-add', 'Tambah') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">

                {{-- CARD HEADER--}}
                <div class="card-header">
                    <strong><i class="cil-list"></i> List Mahasiswa</strong>
                </div>

                {{-- CARD BODY--}}
                <div class="card-body">

                    <div class="row justify-content-end">
                        <div class="col-md-6 justify-content-end">
                            <div class="row justify-content-end">
                                {{ $students->links() }}
                            </div>
                        </div>
                    </div>

                    <table class="{{ config('style.table') }} tb-mahasiswa-kp">
                        <thead class="{{ config('style.thead') }}">
                        <tr>
                            <th class="text-center"><i class="cil-people"></i> </th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($students as $student)
                            <tr>
                                <td class="text-center"><img src="{{ asset($student->photo_url_s) }}" class="{{ config('style.photo') }}" alt="Photo"> </td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->nim }}</td>
                                <td class="text-center">
                                    {!! cui()->btn_view(route('backend.students.show', [$student->id])) !!}
                                    @can('students_manage')
                                        {!! cui()->btn_edit(route('backend.students.edit', [$student->id])) !!}
                                        {!! cui()->btn_delete(route('backend.students.destroy', [$student->id]), "Anda yakin akan menghapus data mahasiswa ini?") !!}
                                    @endcan
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">
                                    <h6 class="text-center">Tidak ada mahasiswa</h6>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                    <div class="row justify-content-end">
                        <div class="col-md-6 text-right">

                        </div>
                        <div class="col-md-6 justify-content-end">
                            <div class="row justify-content-end">
                                {{ $students->links() }}
                            </div>
                        </div>
                    </div>

                </div><!--card-body-->

            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

@endsection
