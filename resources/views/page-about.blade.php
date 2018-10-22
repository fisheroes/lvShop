@extends('template')
@section('content')
<style>
    .table {
        width: 50%; 
        margin: 0 auto;
        font-size: 24px;
    }
</style>

<div class="container">
    <table class="well table table-border">
        <tr>
            <td colspan="3"><img src="img/logo.jpg" id="img-block"></td>
        </tr>
        <tr>
            <td class="text-center" width="1"><i class="fa fa-home"></i></td>
            <td>Jl. dsad dsad dsa ds</td>
        </tr>
        <tr>
            <td class="text-center" width="1"><i class="fa fa-at"></i></td>
            <td>missenblacu@gmail.com</td>
        </tr>
        <tr>
            <td class="text-center" width="1"><i class="fa fa-mobile-phone"></i></td>
            <td>08132133213</td>
        </tr>
    </table>
</div>

@endsection