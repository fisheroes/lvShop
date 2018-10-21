@extends('template')
@section('content')
<style>
.carousel{
    background: #000000;
}
.carousel .item{
    height: 100px;
}
.carousel .carousel-item img{
    margin: auto;
    margin-top: 50px;
    margin-bottom: 100px;
}
.img-home {
    margin-right: 100px;
    width: 200px;
    max-width: 100%;
    height: auto;
    object-fit: cover;
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
            </ol>

  <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" src="img/1.jpg" alt="Example 1">
                </div>

                <div class="carousel-item">
                    <img class="d-block" src="img/2.jpg" alt="Example 2">
                </div>

                <div class="carousel-item">
                    <img class="d-block" src="img/3.jpg" alt="Example 3">
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
        
        <div class="col-sm-6">
            <table class="well table table-borderless" height="300">
                <tbody>
                    <tr>
                        <td rowspan="4" width="1">
                            <img class="img-home" src="img/1.jpg">
                        </td>
                        <td width="120">Nama Barang</td>
                        <td width="1"> : </td>
                        <td>Gelang</td>
                    </tr>
                    <tr>
                        <td>Bahan</td>
                        <td width="1"> : </td>
                        <td>Sutra</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td width="1"> : </td>
                        <td>100,000</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <a href="page-stuff" class="btn btn-danger btn-sm">
                                <i class="fa fa-info"></i>
                                 Detail Barang
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="col-sm-6">
            <table class="table table-borderless" height="300">
                <tbody>
                    <tr>
                        <td rowspan="4" width="1">
                            <img class="img-home" src="img/2.jpg">
                        </td>
                        <td width="120">Nama Barang</td>
                        <td width="1"> : </td>
                        <td>Gelang</td>
                    </tr>
                    <tr>
                        <td>Bahan</td>
                        <td width="1"> : </td>
                        <td>Sutra</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td width="1"> : </td>
                        <td>100,000</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <a href="page-stuff" class="btn btn-danger btn-sm">
                                <i class="fa fa-info"></i>
                                 Detail Barang
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="col-sm-6">
            <table class="table table-borderless" height="300">
                <tbody>
                    <tr>
                        <td rowspan="4" width="1">
                            <img class="img-home" src="img/3.jpg">
                        </td>
                        <td width="120">Nama Barang</td>
                        <td width="1"> : </td>
                        <td>Gelang</td>
                    </tr>
                    <tr>
                        <td>Bahan</td>
                        <td width="1"> : </td>
                        <td>Sutra</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td width="1"> : </td>
                        <td>100,000</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <a href="page-stuff" class="btn btn-danger btn-sm">
                                <i class="fa fa-info"></i>
                                 Detail Barang
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="col-sm-6">
            <table class="table table-borderless" height="300">
                <tbody>
                    <tr>
                        <td rowspan="4" width="1">
                            <img class="img-home" src="img/logo.jpg">
                        </td>
                        <td width="120">Nama Barang</td>
                        <td width="1"> : </td>
                        <td>Gelang</td>
                    </tr>
                    <tr>
                        <td>Bahan</td>
                        <td width="1"> : </td>
                        <td>Sutra</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td width="1"> : </td>
                        <td>100,000</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <a href="page-stuff" class="btn btn-danger btn-sm">
                                <i class="fa fa-info"></i>
                                 Detail Barang
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection