@extends('home')
@section('title', 'Riwayat Izin')
@section('content-title', 'Riwayat Izin Siswa ')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Siswa</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">keterangan</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Guru yang menangani</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>23-02-2022</td>
                                    <td>Keluar</td>
                                    <td></td>
                                    <td>bappak i</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary btn-circle"><i
                                                class="fas fa-eye"></i></a>

                                        <a href="" class="btn btn-danger btn-circle btn-sm"
                                            onclick="return confirm('yakin ingin menghapus?')"> <i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
