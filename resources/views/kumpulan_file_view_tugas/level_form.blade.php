@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
<div class="container">
    <div class="card-body">
        <form>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Kode Level</label>
                    <input type="text" class="form-control" placeholder="PGW">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Nama Level</label>
                    <input type="text" class="form-control" placeholder="Pegawai">
                </div>
            </div>
            <button type="submit" class="btn btn-info">Submit </button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    console.log('Hello from level_form.blade.php');
</script>
@endpush