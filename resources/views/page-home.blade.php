@extends('template')
@section('content')
<style>
.carousel{
    background: #000000;
}
.carousel .item{
    height: 500px;
}
.carousel .item img{
    margin: 0 auto;
    margin-top: 50px;
    margin-bottom: 100px;
}
</style>
<script>
  $(document).ready(function(){
    //
  });    
</script>

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

<div class="container">
    <h3 style="text-align: center; font-size: 24px"><i class="glyphicon glyphicon-piggy-bank"></i> Product</h3>
    <hr>
    <div class="row">
        
        <div class="col-md-6">
            <table class="well table table-borderless">
                <tbody>
                    <tr>
                        <td rowspan="4" width="1">
                            <img class="img-circle" src="" width="200" height="200">
                        </td>
                        <td width="115">Nama Barang</td>
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
                            <a href="#" class="btn btn-danger btn-sm">
                                <i class="glyphicon glyphicon-search"></i>
                                 Detail Barang
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="col-md-6">
            <table class="well table table-borderless">
                <tbody>
                    <tr>
                        <td rowspan="4" width="1">
                            <img class="img-circle" src="" width="200" height="200">
                        </td>
                        <td width="115">Nama Barang</td>
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
                            <a href="#" class="btn btn-danger btn-sm">
                                <i class="glyphicon glyphicon-search"></i>
                                 Detail Barang
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="col-md-6">
            <table class="well table table-borderless">
                <tbody>
                    <tr>
                        <td rowspan="4" width="1">
                            <img class="img-circle" src="" width="200" height="200">
                        </td>
                        <td width="115">Nama Barang</td>
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
                            <a href="#" class="btn btn-danger btn-sm">
                                <i class="glyphicon glyphicon-search"></i>
                                 Detail Barang
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="col-md-6">
            <table class="well table table-borderless">
                <tbody>
                    <tr>
                        <td rowspan="4" width="1">
                            <img class="img-circle" src="" width="200" height="200">
                        </td>
                        <td width="115">Nama Barang</td>
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
                            <a href="#" class="btn btn-danger btn-sm">
                                <i class="glyphicon glyphicon-search"></i>
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