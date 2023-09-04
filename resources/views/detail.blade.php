@extends('layouts.member') @section('content')
<div class="container py-4 my-4 mx-auto d-flex flex-column" style="background: white">
    <div class="header">
        <div class="row r1">
            <div class="col-md-9 abc">
                <h1>{{$mobil->merek}} </h1>
            </div>
            <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
        </div>
    </div>
    <div class="container-body mt-4">
        <div class="row r3">
            <div class="col-md-5 p-0 klo">
                @if ($mobil->Status_sewa == "Tersedia")
                <button class="btn btn-sm btn-primary">Tersedia</button>
                @else
                <button class="btn btn-sm btn-danger"> Sedang Disewa</button>
                @endif
                <ul>
                    <li>100% Quality</li>
                    <li>Free Shipping</li>
                    <li>Easy Returns</li>
                    <li>12 Months Warranty</li>
                    <li>EMI Starting from (On Credit Cards)</li>
                    <li>Normal Delivery : 4-5 Days</li>
                    <li>Express Delivery : 2-3 Days</li>
                    <li>COD Available (All Over India)</li>
                </ul>
            </div>
            <div class="col-md-7"> <img src="{{$mobil->gambar()}}" width="90%" height="95%"> </div>
        </div>
    </div>
    <div class="footer d-flex flex-column mt-5">
        <div class="row r4">
            <div class="col-md-2 myt des"><a href="#">Description</a></div>

            @if ($mobil->status_sewa == 'Tersedia')
            <button class="btn btn-sm btn-primary">Tersedia</button>
            @else
            <button class="btn btn-sm  text-white bg-danger">sedang di sewa</button>
            @endif
            <br><br>

            @if ($mobil->status_sewa == 'Tersedia')
            <form action="/sewa/mobil/{{$mobil->id}}" method="post" enctype="multipart/form-data">
                @csrf
            <input type="date" name="tanggal_mulai">
            <br><br>
             <input type="date" name="tanggal_selesai">
            <br><br>
            <input type="text" name="lama_sewa">

            </form>
            @endif

            <div class="col-md-2 myt "><a href="#">Review</a></div>
            <div class="col-md-2 mio offset-md-4"><a href="#"></a></div>
            <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="mobil/boking/{{$mobil->id}}">BOOKING</a></button></div>
        </div>
    </div>
</div>
@endsection

<style>
body {
    background: #ffc107;
    font-family: Arial, Helvetica, sans-serif
}

.container {

}

.abc {
    padding-left: 40px
}

.pqr {
    padding-right: 70px;
    padding-top: 14px
}

.para {
    float: right;
    margin-right: 0;
    padding-left: 80%;
    top: 0
}

.fa-star {
    color: yellow
}

li {
    list-style: none;
    line-height: 50px;
    color: #000
}

.col-md-2 {
    padding-bottom: 20px;
    font-weight: bold
}

.col-md-2 a {
    text-decoration: none;
    color: #000
}

.col-md-2.mio {
    font-size: 12px;
    padding-top: 7px
}

.des::after {
    content: '.';
    font-size: 0;
    display: block;
    border-radius: 20px;
    height: 6px;
    width: 55%;
    background: yellow;
    margin: 14px 0
}

.r4 {
    padding-left: 25px
}

.btn-outline-warning {
    border-radius: 0;
    border: 2px solid yellow;
    color: #000;
    font-size: 12px;
    font-weight: bold;
    width: 70%
}

@media screen and (max-width: 620px) {
    .container {
        width: 98%;
        display: flex;
        flex-flow: column;
        text-align: center
    }

    .des::after {
        content: '.';
        font-size: 0;
        display: block;
        border-radius: 20px;
        height: 6px;
        width: 35%;
        background: yellow;
        margin: 10px auto
    }

    .pqr {
        text-align: center;
        margin: 0 30px
    }

    .para {
        text-align: center;
        padding-left: 90px;
        padding-top: 10px
    }

    .klo {
        display: flex;
        text-align: center;
        margin: 0 auto;
        margin-right: 40px
    }
}

</style>