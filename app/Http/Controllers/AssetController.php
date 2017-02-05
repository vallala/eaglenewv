<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Asset;
use App\Customer;

class AssetController extends Controller
{
    public function index()
    {
        
        $assets=Asset::all();
        return view('assets.index',compact('assets'));
    }
	public function show($id)
    {
        
        $asset = Asset::findOrFail($id);

        return view('assets.show',compact('asset'));
    }
	public function create()
    {

        $customers = Customer::lists('name','id');
        return view('assets.create', compact('customers'));
    }
	/**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)   
    {

       $asset= new Asset($request->all());
       $asset->save();

              return redirect('assets');
    }
	public function edit($id)
    {
        $asset=Asset::find($id);
        return view('assets.edit',compact('asset'));
    }
	/**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $asset= new Asset($request->all());
        $asset=Asset::find($id);
        $asset->update($request->all());
        return redirect('assets');
    }
	 public function destroy($id)
    {
        Asset::find($id)->delete();
        return redirect('assets');
    }

}
