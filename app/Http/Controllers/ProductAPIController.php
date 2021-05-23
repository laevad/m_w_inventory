<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::select('id', 'name', 'price','quantity')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->save();
        return response()->json(array(
            'message' => 'product Added',
            'product' => $product
        ),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product =  Product::find($id);
        if($product == NULL){ return response()->json( ['message' => 'Product not found'] ); }
        return response()->json($product);
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
        $product =  Product::find($id);
        if($product == NULL){ return response()->json( ['message' => 'Product not found'] ); }
        if($request->has('name')){
            $product->name = $request->input('name');
        }
        if($request->has('price')){
            $product->price = $request->input('price');
        }
        if($request->has('quantity')){
            $product->quantity = $request->input('quantity');
        }
        $product->save();
        return response()->json(array(
           'message' => 'Product is Updated!',
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =  Product::find($id);
        if($product == NULL){ return response()->json( ['message' => 'Product not found'] ); }
        $product->delete();
        return response()->json(array(
           'message' => 'Product is deleted!',
        ));

    }
}
