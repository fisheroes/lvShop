@extends('template')
@section('content')
<style>
.carousel{
    background: #000000;
}
.carousel .carousel-item img{
    margin: 0 0 50px 0;
    width: 100%;
    max-width: 100%;
}
#img-block {
    position: relative;
    max-width: 100%;
}
.text-block {
    position: absolute;
    text-align: center;
    color: white;
    top: 75%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>

<div class="jumbotron">
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

  <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" src="img/01.jpg" alt="Example 1">
                </div>

                <div class="carousel-item">
                    <img class="d-block" src="img/02.jpg" alt="Example 2">
                </div>

                <div class="carousel-item">
                    <img class="d-block" src="img/03.jpg" alt="Example 3">
                </div>
                
                <div class="carousel-item">
                    <img class="d-block" src="img/04.jpg" alt="Example 3">
                </div>
            </div>

  <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</div>

<div class="container">
    <h3 style="text-align: center; font-size: 24px"><i class="fa fa-tag"></i> Product</h3>
    <hr>
    <div class="row">
        
        <div class="col-md-6">
            <img src="img/01.jpg" id="img-block">
            <div class="text-block"> 
                <h5 class="text-white-50 bg-dark">Wooden Poster</h5>
                <a href="page-stuff"><button type="button" class="btn btn-info"><i class="fa fa-info"></i> Detail Barang</button></a>
            </div>
        </div>
        
        <div class="col-md-6">
            <img src="img/02.jpg" id="img-block">
            <div class="text-block"> 
                <h5 class="text-white-50 bg-dark">Bracelet</h5>
                <a href="page-stuff"><button type="button" class="btn btn-info"><i class="fa fa-info"></i> Detail Barang</button></a>
            </div>
        </div>
        
        <div class="col-md-6">
            <img src="img/03.jpg" id="img-block">
            <div class="text-block"> 
                <h5 class="text-white-50 bg-dark">Leather Bracelet</h5>
                <a href="page-stuff"><button type="button" class="btn btn-info"><i class="fa fa-info"></i> Detail Barang</button></a>
            </div>
        </div>
        
        <div class="col-md-6">
            <img src="img/04.jpg" id="img-block">
            <div class="text-block"> 
                <h5 class="text-white-50 bg-dark">Key Chain</h5>
                <a href="page-stuff"><button type="button" class="btn btn-info"><i class="fa fa-info"></i> Detail Barang</button></a>
            </div>
        </div>
        
    </div>
</div>
@endsection