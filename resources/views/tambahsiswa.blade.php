@extends('home')
@section('title', 'Tambah Siswa')
@section('content-title', 'Tambah Siswa')

@section('content')

<form action="{{route('siswa.store')}}">
    <div class="card">
        <div class="form-control">
            <label for=""></label>
        </div>
    </div>
</form>

@endsection