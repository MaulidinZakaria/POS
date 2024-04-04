@extends('layouts.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Edit')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Kategori</h3>
        </div>

        <form action="{{ route('updateKategori', $data->kategori_id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="card-body">
                <div class="form-group">
                    <label for="kodeKategori">Kode Kategori</label>
                    <input type="text" class="form-control" id="kodeKategori" name="kategori_kode" placeholder="untuk makanan. contoh: MKN" value="{{ $data->kategori_kode }}">
                </div>
                <div class="form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" class="form-control" id="namaKategori" name="kategori_nama" placeholder="Nama" value="{{ $data->kategori_nama }}">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </form>
    </div>
</div>
@endsection