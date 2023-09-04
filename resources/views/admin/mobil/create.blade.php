

@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tambah Mobil</h1>
    <br>
    <div class="card">
        <div class="card-header">
            form tamabah mobil
        </div>
        <div class="card-body">
            <form action="{{route('mobil.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Upload Gambar</label>
                    <input type="file" class="form-control" name="gambar">
                </div> <br>
                <div class="form-group">
                    <label for="">Merek</label>
                    <input type="text" class="form-control" name="merek">
                </div><br>
                <div class="form-group">
                    <label for="">Model</label>
                    <input type="text" class="form-control" name="model">
                </div><br>
                <div class="form-group">
                    <label for="">Nomor Plat</label>
                    <input type="text" class="form-control" name="nomor_plat">
                </div><br>
                <div class="form-group">
                    <label for="">Harga Sewa Perhari</label>
                    <input type="text" class="form-control" name="harga_sewa_perhari">
                </div><br>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea class="form-control" rows="3" name="deskripsi"></textarea>
                </div><br>
                <div class="form-group">
                     <button  class="btn btn-primary float-right">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
