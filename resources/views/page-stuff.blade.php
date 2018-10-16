@extends('template')
@section('content')

<style>
    .carousel{
        background: #000000;
    }
    .carousel .item{   
        height: 300px;
    }
    .carousel .item img{
        margin: 0 auto;
        margin-top: 0px;
        margin-bottom: 0px;
    }
</style>

<div class="row">
    <div class="col-md-5">
        <div class="jumbotron">
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

  <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/1.jpg" alt="Example 1">
                        </div>

                        <div class="item">
                            <img src="img/2.jpg" alt="Example 2">
                        </div>

                        <div class="item">
                            <img src="img/3.jpg" alt="Example 3">
                        </div>
                    </div>

  <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                       <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <table class="well table table-borderless table-responsive">
                <tr>
                    <td width="125">Nama Barang</td>
                    <td width="1"> : </td>
                    <td>Gelang</td>
                </tr>
                <tr>
                    <td>Bahan</td>
                    <td width="1"> : </td>
                    <td>Sutra</td>
                </tr>
                <tr>
                    <td rowspan="3">Deskripsi</td>
                    <td width="1"> : </td>
                    <td>Begini</td>
                </tr>
                <tr style="border: hidden">
                    <td></td>
                    <td>Begitu</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Begimana</td>
                </tr>
                <tr style="border-bottom: hidden">
                    <td>Harga</td>
                    <td width="1"> : </td>
                    <td>100,000</td>
                </tr>
                <tr class="text-center">
                    <td></td>
                    <td colspan="2">
                        <a href="#" class="btn btn-danger btn-sm">
                            <i class="glyphicon glyphicon-search"></i>
                             Add to Chart
                        </a>
                    </td>
                    <td colspan="2">
                        <a href="#" class="btn btn-danger btn-sm">
                            <i class="glyphicon glyphicon-search"></i>
                             BUY
                        </a>
                    </td>
                </tr>
        </table>
    </div>
</div>

@endsection