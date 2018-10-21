<html>
    <head>
        <title>Laravel Shop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
    </head>
    <style>
        .navbar-brand {
            position: relative;
            width: 200px;
            height : 50px;
            margin-bottom: 50px;
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
        .footer-image {
            width: 200px;
            max-width: 100%;
            height: auto;
        }
    </style>
    <body>
        <nav class="navbar fixed-top navbar-expand-sm navbar-dark align-items-end" style="background-color: black">
            <i class="navbar-brand">
                <img src="img/logo.jpg">
            </i>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse mr-auto" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="page-home"><span class="fa fa-home"></span> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="fa fa-tag"></span> Discover our Original Stuff <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="page-stuff">Custom Bracelet</a></li>
                            <li><a class="dropdown-item" href="page-stuff">Wooden Poster</a></li>
                            <li><a class="dropdown-item" href="page-stuff">IDK</a></li>
                            <li><a class="dropdown-item" href="page-stuff">IDK</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-order"><span class="fa fa-check"></span> How to Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-about"><span class="fa fa-adn"></span> About US</a>
                    </li>
                </ul>
            </div>
            <div class="ml-auto">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-user-plus"></span> Sign Up</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-user"></span> Login</a></li>
                </ul>
            </div>
        </nav>
        <br><br><br><br><br><br>
        @section('content')
        @show
    </body>
    <footer style="background-color: black">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-borderless">
                        <tr class="remove-border text-center" style="font-size: 24px">
                            <td><i><img class="footer-image" src="img/logo.jpg"></i></td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-12">
                    <table class="table table-borderless" style="color: whitesmoke">
                        <tr class="remove-border text-center" style="font-size: 36px">
                            <td><a href="#"><i class="fa fa-facebook"></i></a></td>
                            <td><a href="#"><i class="fa fa-instagram"></i></a></td>
                            <td><a href="#"><i class="fa fa-google-plus"></i></a></td>
                            <td><a href="#"><i class="fa fa-whatsapp"></i></a></td>
                            <td><a href="#"><i class="fa fa-youtube"></i></a></td>
                            <td><a href="#"><i class="fa fa-twitter"></i></a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-sm-12">
                <table class="table table-borderless">
                    <tr class="remove-border text-center" style="font-size: 24px">
                        <td><p style="font-size: 12px; font-weight: bolder;">COPYRIGHT 2018 @FFX</p></td>
                    </tr><br><br>
                </table>
            </div>
        </div>
    </footer>
</html>