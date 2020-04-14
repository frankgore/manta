<?php

namespace App\Http\Controllers;

use App\Product;
use App\Vendor;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $products = Product::orderBy('name', 'asc')->paginate(10);
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {   

        return view('products.create', 
                    ['fields' => $product->fields(),
                     'vendors' => Vendor::get()->pluck('name', 'id')->sortBy('name')]);
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
            'url' => 'required',
        ]);
        Product::create($request->all());
        $request->session()->flash('status', 'Product created successfully!');
        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        $request->session()->flash('status', 'Product update successful!');
        return redirect('products');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        $request->session()->flash('status', 'Product deleted sucessfully!');
        return redirect('products');
    }

    /**
     * Show the confirmation form for deleting the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function remove(Product $product)
    {   
        return view('components.confirm', ['object' => $product,
                                           'method' => 'delete',
                                           'button' => 'Delete Product',
                                           'cancel' => 'ProductController@index',
                                           'confirm' => 'ProductController@destroy']);
    }
}
