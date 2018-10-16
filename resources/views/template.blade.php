<html>
    <head>
        <title>Laravel Shop</title>
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
    </head>
    <style>
        .navbar-brand {
            transform: translateX(-50%);
            left: 50%;
            position: absolute;
            width: 200px;
            height : 50px;
        }
        img {
            max-width: 100%;
            height: auto;
            width: auto\9; /* ie8 */
        }
        .dropdown-menu{
            width: 225px;
        }
        .remove-border{
            border: hidden;  
        }
    </style>
    <body>
        <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <i class="navbar-brand">
                        <img src="img/logo.jpg">
                    </i>
                </div>
                <br><br><br><br><br>
                <div class="">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="page-home"><span class="glyphicon glyphicon-home"></span> Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-piggy-bank"></span> Discover our Original Stuff <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="page-stuff">Custom Bracelet</a></li>
                                <li><a href="page-stuff">Wooden Poster</a></li>
                                <li><a href="page-stuff">IDK</a></li>
                                <li><a href="page-stuff">IDK</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url("")}}"><span class="glyphicon glyphicon-file"></span> How to Order</a>
                        </li>
                        <li>
                            <a href="{{url("")}}"><span class="glyphicon glyphicon-text-background"></span> About US</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br><br><br><br><br><br>
        @section('content')
        @show
    </body>
    <footer style="background-color: #000">
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-center">
                    <table class="table table-borderless" style="color: whitesmoke; font-size: 16px">
                        <tr class="remove-border">
                            <td></td>
                            <td colspan="2">
                                <img class="img" src="img/logo.jpg" style="width: 250px; height: 75px">
                            </td>
                        </tr>
                        <tr class="remove-border">
                            <td><i class="fa fa-home"></i></td>
                            <td> Jl. xxx xxxxxxdsad dsadsad dsadsa</td>
                        </tr>
                        <tr class="remove-border">
                            <td><i class="fa fa-phone"></i></td>
                            <td>08321312312</td>
                        </tr>
                        <tr class="remove-border">
                            <td><i class="fa fa-envelope"></i></td>
                            <td>asdas@sdsad.com</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6 text-center">
                    <table class="table table-borderless" style="color: whitesmoke">
                        <tr class="remove-border text-center" style="font-size: 20px">
                            <td colspan="3">Social Media Link</td>
                        </tr>
                        <tr class="remove-border text-center" style="font-size: 40px">
                            <td><a href="#"><i class="fa fa-facebook"></i></a></td>
                            <td><a href="#"><i class="fa fa-instagram"></i></a></td>
                            <td><a href="#"><i class="fa fa-google-plus"></i></a></td>
                        </tr>
                        <tr class="remove-border text-center" style="font-size: 40px">
                            <td><a href="#"><i class="fa fa-whatsapp"></i></a></td>
                            <td><a href="#"><i class="fa fa-youtube"></i></a></td>
                            <td><a href="#"><i class="fa fa-twitter"></i></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="text-center">
            <p style="font-size: 12px; font-weight: bolder;">COPYRIGHT 2018 @FFX</p><br>
        </div>
    </footer>
</html>