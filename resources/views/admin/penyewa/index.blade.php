@extends('layouts.admin')

@section('content')
<div class="container p-0">
    <h2>Penyewa</h2>
    <br>
</div>
<div class="card">
    <div class="card-body ">
        {{-- <a href="{{route('mobil.create')}}" class="btn btn-primary"> tambah mobil </a> --}}
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>sim</th>
            <th>email</th>
            <th>No telepon</th>    
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1
        @endphp
          @foreach ($penyewa as $item)
              <tr>
                  <td>{{$no++}}</td>
                  <td>{{$item->user->name}}</td>
                  <td>{{$item->user->alamat}}</td>
                  <td>{{$item->user->sim}}</td>
                  <td>{{$item->user->email}}</td>
                  <td>{{$item->user->nomor}}</td>
              </tr>
          @endforeach
    </tbody>
    </table>
</div>
</div>
@endsection