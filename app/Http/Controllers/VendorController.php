<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::orderBy('name', 'asc')->paginate(10);
        return view('vendors.index', ['vendors' => $vendors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Vendor $vendor)
    {   
        return view('vendors.create', 
                    ['fields' => $vendor->fields()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'halo_identifier' => 'required|unique:vendors',
        ]);
        Vendor::create($request->all());
        $request->session()->flash('status', 'Vendor created successfully!');
        return redirect('vendors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        return view('vendors.show', ['vendor' => $vendor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        return view('vendors.edit', ['vendor' => $vendor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        $this->validate($request, [
            'name' => 'required',
            'halo_identifier' => 'required|unique:vendors',
        ]);
        $vendor->update($request->all());
        $request->session()->flash('status', 'Vendor update successful!');
        return redirect('vendors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Vendor $vendor)
    {
        $vendor->delete();
        $request->session()->flash('status', 'Vendor deleted sucessfully!');
        return redirect('vendors');
    }

    /**
     * Show the confirmation form for deleting the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function remove(Vendor $vendor)
    {   
        return view('components.confirm', ['object' => $vendor,
                                           'method' => 'delete',
                                           'button' => 'Delete Vendor',
                                           'cancel' => 'VendorController@index',
                                           'confirm' => 'VendorController@destroy']);
    }
}
