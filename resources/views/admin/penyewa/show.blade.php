@extends('layouts.admin')

@section('content')
<div class="container p-0">
    <h2>Mobil</h2>
    <br>
</div>
<div class="card">
    <div class="card-body ">
        <a href="{{route('mobil.create')}}" class="btn btn-primary"> tambah mobil </a>
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Merek</th>
            <th>model</th>
            <th>No plat</th>
            <th>Status</th>
            <th>Harga</th>
            <th>Aksi</th>
            
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1
        @endphp
    </tbody>
    </table>
</div>
</div>
@endsection