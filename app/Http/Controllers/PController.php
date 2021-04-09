<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PModel;

class PController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=PModel::all();
        return view('viewproduct',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addproduct');
    }

    public function search()
    {
        $getcode=request('Code');
        $product=PModel::query()->where('Code','LIKE',"%{$getcode}")->get();
        return view('viewproduct',compact('product'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getcode=request('pcode');
        $getname=request('pname');
        $getdesc=request('pdescription');
        $getprice=request('pprice');
        $getdist=request('pdistributor');
        $getmfg=request('pmfgdate');
        $getexp=request('pexpdate');

        $product=new PModel();
        $product->Code=$getcode;
        $product->Name=$getname;
        $product->Description=$getdesc;
        $product->Price=$getprice;
        $product->Distributor=$getdist;
        $product->Mfgdate=$getmfg;
        $product->Expdate=$getexp;
        $product->save();

        echo "Inserted Successfully";


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=PModel::find($id);
        return view ('/editviewproduct',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
