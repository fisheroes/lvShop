@extends('template')
@section('content')

<style>
    .product-slider #carousel { border: 3px solid slateblue; height: 500px; background: #000000; }

    .product-slider #thumbcarousel { margin: 5px 0 0; padding: 0 25px; }

    .product-slider #thumbcarousel .carousel-item { text-align: center; }

    .product-slider #thumbcarousel .carousel-item .thumb { border: 3px solid transparent; width: 100%; margin: 1px 1px; display: inline-block; vertical-align: middle; cursor: pointer; max-width: 75px; max-height: 75px }

    .product-slider #thumbcarousel .carousel-item .thumb:hover { border-color: violet; }

    .product-slider #thumb img { width: 100%; height: auto; margin: auto; }
    
    .product-slider .carousel-item img { margin: auto}
</style>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="jumbotron" style="height: 700px">
                <div class="product-slider">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img class="d-block" src="img/01.jpg"></div>
                            <div class="carousel-item"><img class="d-block" src="img/02.jpg"></div>
                            <div class="carousel-item"><img class="d-block" src="img/03.jpg"></div>
                            <div class="carousel-item"><img class="d-block" src="img/04.jpg"></div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div id="thumbcarousel" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div data-target="#carousel" data-slide-to="0" id="thumb" class="thumb"><img src="img/01.jpg"></div>
                                    <div data-target="#carousel" data-slide-to="1" id="thumb" class="thumb"><img src="img/02.jpg"></div>
                                    <div data-target="#carousel" data-slide-to="2" id="thumb" class="thumb"><img src="img/03.jpg"></div>
                                    <div data-target="#carousel" data-slide-to="3" id="thumb" class="thumb"><img src="img/04.jpg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-sm-6">
            <div class="jumbotron text-center" style="height: 700px">
                <p><b><u>Nama Barang</u></b></p>
                <p>dslkajdlsa</p>
                <p><b><u>Bahan</u></b></p>
                <p>dsadsadsadsadsad</p>
                <p><b><u>Dimensi</u></b></p>
                <p>dsadasdsadsadsad</p>
                <p><b><u>Keterangan</u></b></p>
                <p>dsadsadsad sadsadsad sadassssss sssssssssssss ssssssssssss ssssssss dsaaaaaaaa</p>
                <p><b><u>Harga</u></b></p>
                <p>dsadsadsadsadsadsad</p>
                <p>
                    <button type="button" class="btn btn-warning"><i class="fa fa-cart-plus"></i> Add to Chart</button>   <button type="button" class="btn btn-success"><i class="fa fa-dollar"></i> BUY Now !</button>    
                </p>
            </div>
        </div>
    </div>
</div>
@endsection