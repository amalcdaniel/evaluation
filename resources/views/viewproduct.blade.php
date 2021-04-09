@extends("theme")
@section("content")
<div class="container">
    <center><h1>VIEW PRODUCT</h1></center>
    <br>
    <div class="row">
    <div class="col col-12 col-sm-12 col-lg-12 col-md-12 col-xl-12">
    <form action="readproduct" method="post">
    {{csrf_field() }}
    <table class="table table-borderless">
    <tr>
    <td>Code</td>
    <td>Name</td>
    <td>Description</td>
    <td>Price</td>
    <td>Distributor</td>
    <td>Mfgdate</td>
    <td>Expdate</td>
    </tr>
    @foreach($product as $prdt)
    <tr>
    <td>{{$prdt->Code}}</td>
    <td>{{$prdt->Name}}</td>
    <td>{{$prdt->Description}}</td>
    <td>{{$prdt->Price}}</td>
    <td>{{$prdt->Distributor}}</td>
    <td>{{$prdt->Mfgdate}}</td>
    <td>{{$prdt->Expdate}}</td>
    </tr>
    @endforeach
    </table>
    </form>
    </div>
    </div>
    </div>
    @endsection