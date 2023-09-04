@extends('layouts.member')

@section('content')
@php
use App\Models\Tb_mobil;
$mobil = tb_mobil::all();
@endphp

<div class="container-fluid d-flex justify-content-center with">

    <div class="row mt-5">
        @foreach ($mobil as $item)
        <div class="col">
            <div class="card">
              
              @if ($item->status_sewa == "Tersedia")
              <button class="btn btn-sm btn-primary">Tersedia</button>
              @else
              <button class="btn btn-sm btn-danger"> Sedang Disewa</button>
              @endif 
              <br><br>
          <img src="{{$item->gambar()}}" class="card-img-top" width="100%">
          <div class="card-body pt-10 px-0">
            <div class="d-flex flex-row justify-content-between mb-0 px-3">
                <h6>{{$item->merek}} </h6>
              <small class="text-muted mt-1">{{$item->model}} </small>
            </div>
            <hr class="mt-2 mx-3">
            <div class="d-flex flex-row justify-content-between px-3 pt-4"  style="background: #ECEDF1">
          
              
            </div>
            <div class="d-flex flex-row justify-content-between p-3 mid">
              <div class="d-flex flex-column">
                <h5 class="mb-0">Merk : {{$item->model}}  </h5> <br>
                <h5 class="mb-0">No PLat :  {{$item->nomor_plat}} </h5><br>
                <h5 class="mb-0">Harga sewa : Rp.{{$item->harga_sewa_perhari}}</h5>
                <div class="d-flex flex-row">
                <img src="">
                <div class="d-flex flex-column ml-1">
                  </div>
                </div>
              </div>
              <div class="d-flex flex-column">
                <small class="mb-2"></small>
                <small class="mb-2"> </small>
                <small class="mb-2"> </small>
                 <div class="d-flex flex-row">
                  <small class="mb-2"> </small>
                  <img src="">
              </div>
            </div>
            </div>
            <small class="text-muted key pl-3"></small><div class="mx-3 mt-3 mb-2">
                
                  @if ($item->status_sewa == "Tersedia")
                  <a href="/mobil/detail/{{$item->id}}">
                    <button type="button" class="btn btn-danger btn-block" ><small>BOOKING</small></button>
                  </a>
                @else
                {{-- <a href="/mobil/detail/{{$item->id}}"> --}}
                  <button type="button" class="btn btn-danger btn-block" disabled><small>BOOKING</small></button>
                {{-- </a> --}}
                @endif

               
            
            </div> 
        
            {{-- <small class="d-flex justify-content-center text-muted">*Legal Disclaimer</small> --}}
          </div>
        </div>
          </div>
          @endforeach
        </div>
       









    
    </div>
  </div>
@endsection 

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
body{
	background: #F5F1EE;
	font-family: 'Roboto', sans-serif;
}
.card{
	width: 250px;
	border-radius: 10px;
}

.card-img-top{
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;
}
span.text-muted{
	font-size: 12px;
}
small.text-muted{
	font-size: 8px;
}
h5.mb-0{
	font-size: 1rem;
}
small.ghj{
	font-size: 9px;
}
.mid{
	background: #ECEDF1;
}
h6.ml-1{
	font-size: 13px;
}
small.key{
	text-decoration: underline;
	font-size: 9px;
	cursor: pointer;
}
.btn-danger{
	color: #FFCBD2;
}
.btn-danger:focus{
	box-shadow: none;
}
small.justify-content-center{
	font-size: 9px;
	cursor: pointer;
	text-decoration: underline;
}

@media screen and (max-width:600px){
    .col-sm-4{
        margin-bottom: 50px;
    }
}
</style>
