@extends('layouts.member')
    {{-- mobil sewa
    {{$user }} --}}
@section('content')
@foreach ($sewa as $item)
<div class="container">
@if ($item->id_user == $user)
<div class="card mb-3">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-1">
        <img src="{{$item->mobil->gambar()}}" class="img-fluid" alt="">
      </div>
      <div class="col-sm-7">
        <h4>{{$item->mobil->merek}}</h4>
        {{$item->mobil->nomor_plat}}
      </div>
      <div class="col">
        <h2 class="float-right">{{$item->total_harga}}</h2>
        @if ($item->status_pengembalian == null)
        <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
          Kembalikan Mobil
       </button> 
       @else 
        <button type="button" disabled class="btn btn-danger btn-block float-right" ><small>Mobil Sudah Dikembalikan</small></button>
        @endif
      </div>
    </div>
  </div>
</div>
</div>
@endif
<div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/mobil/kembalikan/{{$item->id}}" method="post" enctype="multipart/form-data">
           @csrf
          <input type="text" value="{{$item->mobil->id}}" name="id_mobil" hidden>
          <input type="text" class="form-control " name="nomor_plat" placeholder="masukan nomor telepon">
           <button>cek</button>
        </form>
      </div>
  </div>
</div>
@endforeach
</div>
@endsection

</body>
</html>