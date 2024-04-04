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
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label>Level ID</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
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