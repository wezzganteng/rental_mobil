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
         @foreach ($mobil as $item)
         <tr>
            <td>{{$no ++}} </td>
            <td><img src="{{$item->gambar()}}" style="height: 50px" alt=""></td>
            <td>{{$item->merek}}</td>
            <td>{{$item->model}}</td>
            <td>{{$item->nomor_plat}}</td>
            <td> <div class="bg-succes rounded "> tersedia</div></td>
            <td>Rp.6000000</td>
            <td>
                @if ($item-> Status_sewa == 'Tersedia')
                <div class="bg-succes rounded text-white tetxt-center">Tersedia</div>
                @else
                <div class="bg-succes rounded text-white tetxt-center">Disewa</div>
                @endif

                <form action="{{route('mobil.destroy' , $item->id)}}" method="post">
                    @method('delete')
                    @csrf

                    <a href="{{route('mobil.edit', $item->id)}}" class="btn btnn-sm btn-info">edit</a>
                    <button class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus')"> hapus</button>
                </form>
            </td>
        </tr>
         @endforeach
    </tbody>
    </table>
</div>
</div>
@endsection