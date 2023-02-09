@extends('home')
@section('title', 'Izin Keluar')
@section('content-title', 'Page Izin Keluar')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" enctype="multipart/form-data" action="{{ route('izin.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <select class="form-control" id="kelas" name="kelas" value="">
                                        @foreach ($kelass as $kelas)
                                            <option value="{{ $kelas->id }}">{{ $kelas->kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <select class="form-control" name="jurusan" id="jurusan" value="">
                                        @foreach ($jurusans as $jurusan)
                                            <option value="{{ $jurusan->id }}">{{ $jurusan->jurusan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="siswa_id">Nama</label>
                            <select name="siswa_id" id="siswa_id" class="form-control">
                                @foreach ($siswas as $siswa)
                                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="jam">Jam ke-</label>
                                    <input value="1" type="number" min="1" max="10" class="form-control"
                                        id="jam" name="jam">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <input class="form-control" value="Izin Masuk" type="hidden" id="keterangan" name="keterangan">
                        </div>
                        <div class="form-group">
                            <label for="alasan">Alasan</label>
                            <textarea name="alasan" class="form-control" id="alasan" cols="30" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="guru">Guru yang menangani</label>
                            <select class="form-control" name="guru_id" id="guru">
                                @foreach ($gurus as $guru)
                                    <option value="{{ $guru->id }}">{{ $guru->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div method="POST" class="form-group" action="{{route('izin.store')}}">
                            @csrf 
                            <input type="submit" class="btn btn-success" value="simpan">
                            <a href="" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
