@extends('layout.main')


@section('title', 'Detail Mahasiswa')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Detail Mahasiswa</h1>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{ $dataMahasiswa->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $dataMahasiswa->nim }}</h6>
                    <p class="card-text">{{ $dataMahasiswa->email }}</p>


                    <button type="submit" class="btn btn-primary">Detail</button>
                    <form action="{{ $dataMahasiswa->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/datamahasiswa" class="card-link">Kembali</a>
                </div>
                </div>

            </div>
        </div>
    </div>
@endsection