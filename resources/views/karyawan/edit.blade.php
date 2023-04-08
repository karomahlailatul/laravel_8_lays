@extends('layouts.main')

@include('layouts.header')
@include('layouts.footer')

@section('title', 'Home')
@section('content')
<!-- <div class="container ">
    <div class="d-xl-flex d-lg-flex d-md-grid d-sm-grid">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <h1>Hai, Welcome to Homepage Our Site</h1>
        </div>
        <div>
            <p>This sample page has been designed as a homepage, which can be accessed by everyone. Users can easily find what they are looking for when they first visit this website.</p>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Karyawan
                </div>
                <div class="card-body">
                    <form action="{{ route('karyawan.update', $karyawan) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $karyawan->nama }}" placeholder="Masukkan nama karyawan">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="3" placeholder="Masukkan alamat karyawan">{{ $karyawan->alamat }}</textarea>
                            @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ $karyawan->tanggal_lahir }}">
                            @error('tanggal_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jabatan_id">Jabatan</label>
                            <select name="jabatan_id" class="form-control @error('jabatan_id') is-invalid @enderror">
                                <option value="">-- Pilih Jabatan --</option>
                                @foreach ($jabatan as $row)
                                <option value="{{ $row->id }}" {{ $karyawan->jabatan_id == $row->id ? 'selected' : '' }}>{{ $row->nama }}</option>
                                @endforeach
                            </select>
                            @error('jabatan_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection