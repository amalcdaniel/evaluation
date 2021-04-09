@extends("theme")

@section("content")

    <div class="container">
    <center><h1>ADD PRODUCT</h1></center>
    <br>
    <div class="row">
    <div class="col col-12 col-sm-12 col-lg-12 col-md-12 col-xl-12">
    <form action="git init" method="post">
    {{csrf_field() }}
    <table class="table table-borderless">
    <tr>
        <td>Product Code :</td>
        <td><input type="text" class="form-control" name="pcode" value="{{$product->Code}}"></td>
    </tr>
    <tr>
        <td>Product Name :</td>
        <td><input type="text" class="form-control" name="pname" value="{{$product->Name}}"></td>
    </tr>
    <tr>
        <td>Description :</td>
        <td> <textarea name="pdescription"  cols="30" rows="10" class="form-control" value="{{$product->Description}}"></textarea></td>
    </tr>

    <tr>
        <td>Price  :</td>
        <td><input type="number" class="form-control" name="pprice" value="{{$product->Price}}"></td>
    </tr>

    
    <tr>
        <td>Distributor :</td>
        <td><input type="text" class="form-control" name="pdistributor" value="{{$product->Distributor}}"></td>
    </tr>

    <tr>
        <td>Mfg Date :</td>
        <td><input type="date" class="form-control" name="pmfgdate" value="{{$product->MfgDate}}"></td>
    </tr>

    <tr>
        <td>Exp Date :</td>
        <td><input type="date" class="form-control" name="pexpdate" value="{{$product->ExpDate}}"></td>
    </tr>

    <tr>
        <td></td>
        <td><button class="btn btn-dark">Submit</button></td>
    </tr>
    
    
    </table>
    </form>
    
    
    </div>
    
    </div>
    
    </div>
    @endsection