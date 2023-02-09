@extends('home')
@section('title', 'Master Siswa')
@section('content-title', 'Master Siswa')

@section('content')

    {{-- <a class="btn btn-success mb-2" href="{{route('siswa.create')}}">Tambah data</a> --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Siswa</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($siswas as $siswa)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $siswa->nama }}</td>
                                        <td>{{ $siswa->jurusan->jurusan}}</td>
                                        <td>{{ $siswa->kelas->kelas }}</td>
                                        {{-- <td>{{$item->foto}}</td> --}}
                                        <td>
                                            <a href="" class="btn btn-warning btn-circle btn-sm"><i
                                                    class="fas fa-eye"></i></a>
                                            <a href="" class="btn btn-info btn-circle btn-sm"><i
                                                    class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-danger btn-circle btn-sm"
                                                onclick="return confirm('yakin ingin menghapus?')"> <i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
