@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Nilai Mahasiswa
                    <a href="{{ route('nilai.create') }}" class="btn btn-md btn-success float-right">Tambah Data</a>
                </div>
                <div class="card-body" >
                    <div class="table-responsiv">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO.</th>
                                <th>NPM</th>
                                <th>NAMA MAHASISWA</th>
                                <th>NAMA MAKUL</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr>
                            
                            <!-- untuk penomoran -->
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($nilai as $nil)
                            <tr>
                                <td>{{ $no++   }}</td>
                                <td>{{ $nil->mahasiswa->npm }}</td>
                                <td>{{ $nil->mahasiswa->user->name }}</td>
                                <td>{{ $nil->Makul->nama_makul }}</td>
                                <td>{{ $nil->Makul->sks }}</td>
                                <td>{{ $nil->nilai }}</td>
                                <td>
                                    <a href="{{ route('nilai.edit', $nil->id) }}" class="btn btn-sm btn-warning">EDIT</a>
                                    <a href="{{ route('nilai.hapus', $nil->id) }}" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>
                            @endforeach
                            

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection