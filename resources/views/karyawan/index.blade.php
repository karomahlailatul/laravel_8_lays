@extends('layouts.main')

@include('layouts.header')
@include('layouts.footer')

@section('title', 'Home')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Daftar Karyawan
                    <a href="{{ route('karyawan.create') }}" class="btn btn-primary btn-sm float-right">Tambah Karyawan</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form action="{{ route('karyawan.search') }}" method="GET" class="form-inline mb-3">
                        <input type="text" name="query" class="form-control mr-2" placeholder="Cari karyawan...">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawan as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $row->tanggal_lahir)->format('d/m/Y') }}</td>
                                <td>{{ $row->jabatan->nama }}</td>
                                <td>
                                    <a href="{{ route('karyawan.edit', $row) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('karyawan.destroy', $row) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
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