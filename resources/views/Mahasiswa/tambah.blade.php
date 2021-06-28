@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Tambah Data
                <a href="{{route('index')}}" class="btn btn-danger float-right">KEMBALI >></a>
            </div>
            <div class="card-body">
                <form action="{{ route('simpan.mahasiswa') }}" method="POST" class="form-item" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="user" class="form-control col-md-12" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control col-md-12" placeholder="Masukan Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control col-md-12" placeholder="Masukan Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="number" name="telepon" class="form-control col-md-12" placeholder="Masukan Telepon">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control col-md-12" placeholder="Masukan Alamat">
                    </div>
                    <h6>Jenis Kelamin</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="L">
                        <label class="form-check-label" for="jenis">Laki - laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="P">
                        <label class="form-check-label" for="jenis">Perempuan</label>
                    </div>
                    <div class="form-group">
                            <span>Pilih Gambar</span>
                            <div>
                        <input type="file" name="image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan" style="margin-left: 40%">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
