@extends('layout.main')


@section('title', ' Form Tambah Data')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Data</h1>

                <form method="post" action="/datamahasiswa">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" class="form-control" id="nim" placeholder="Masukkan Nim" name="nim">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan">
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    
                </form>

            </div>
        </div>
    </div>
@endsection