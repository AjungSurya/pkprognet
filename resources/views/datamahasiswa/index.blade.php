@extends('layout.main')


@section('title', 'Data Mahasiswa')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Data Mahasiswa</h1>

                <a href="/dataMahasiswa/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

                <ul class="list-group">
                    @foreach( $datamahasiswa as $datamahasiswa)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    
                    {{ $datamahasiswa->nama }}
                    <a href="/datamahasiswa/{{ $datamahasiswa->id }}" class="badge badge-info">Detail</a>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@endsection