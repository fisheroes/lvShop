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
.img-home {
    width: 250px;
    height: 250px;
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
            <table class="well table table-borderless" height="300">
                <tbody>
                    <tr>
                        <td rowspan="3" colspan="2">
                            <img class="img-home" src="img/01.jpg">
                        </td>
                        <td width="125">Nama Barang</td>
                        <td width="1"> : </td>
                        <td width="125">Wooden Poster</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td width="1"> : </td>
                        <td>100,000</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="page-stuff" class="btn btn-danger btn-sm">
                                <i class="fa fa-info"></i>
                                 Detail Barang
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="col-md-6">
            <table class="table table-borderless" height="300">
                <tbody>
                    <tr>
                        <td rowspan="3" colspan="2">
                            <img class="img-home" src="img/02.jpg">
                        </td>
                        <td width="125">Nama Barang</td>
                        <td width="1"> : </td>
                        <td width="125">Bracelet</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td width="1"> : </td>
                        <td>100,000</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="page-stuff" class="btn btn-danger btn-sm">
                                <i class="fa fa-info"></i>
                                 Detail Barang
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="col-md-6">
            <table class="table table-borderless" height="300">
                <tbody>
                    <tr>
                        <td rowspan="3" colspan="2">
                            <img class="img-home" src="img/03.jpg">
                        </td>
                        <td width="125">Nama Barang</td>
                        <td width="1"> : </td>
                        <td width="125">Leather Bracelet</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td width="1"> : </td>
                        <td>100,000</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="page-stuff" class="btn btn-danger btn-sm">
                                <i class="fa fa-info"></i>
                                 Detail Barang
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="col-md-6">
            <table class="table table-borderless" height="300">
                <tbody>
                    <tr>
                        <td rowspan="3" colspan="2">
                            <img class="img-home" src="img/04.jpg">
                        </td>
                        <td width="125">Nama Barang</td>
                        <td width="1"> : </td>
                        <td width="125">Key Chain</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td width="1"> : </td>
                        <td>100,000</td>
                    </tr>
                    <tr>
                        <td colspan="2">
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