<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data = array(
            'loggedAdminUserInfo' =>Admin::where('id', '=', session('LoggedUser'))->first(),
            'title' => 'Main Menu'
        );
        return view('admin.dashboard', compact('data'));
    }
    public function logout(){
		if(session()->has('LoggedUser')){
			session()->pull('LoggedUser');
			return redirect()->route('login');
		}
	}
    public function add()
    {
        $data = array(
            'loggedAdminUserInfo' =>Admin::where('id', '=', session('LoggedUser'))->first(),
            'title' => 'Add Product'
        );
        return view('admin.add', compact('data'));
    }
    public function addProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:11|numeric',
            'quantity' => 'required|max:11|numeric'
        ]);
    
        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->save();
        return redirect()->route('admin.update');
    }
    public function edit($id)
    {
        $data = array(
            'loggedAdminUserInfo' =>Admin::where('id', '=', session('LoggedUser'))->first(),
            'title' => 'Edit Product'
        );
        $product = Product::find($id);
        return view('admin.edit', compact('data', 'product'));
    }
    
    public function update()
    {
        $products = Product::orderBy('id', 'desc')->paginate(5);
        $data = array(
            'loggedAdminUserInfo' =>Admin::where('id', '=', session('LoggedUser'))->first(),
            'title' => 'Update Product'
        );
        return view('admin.update',compact('data', 'products'));
    }
    public function view()
    {
        $products = Product::orderBy('id', 'desc')->paginate(8);
        $data = array(
            'loggedAdminUserInfo' =>Admin::where('id', '=', session('LoggedUser'))->first(),
            'title' => 'View Product'
        );

        return view('admin.view',compact('data', 'products'));
    }
    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.update');
    }
    public function saveEditProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:11|numeric',
            'quantity' => 'required|max:11|numeric'
        ]);
        $product = DB::table('products')->where('id', $request->input('cid'))
        ->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'), 
            'quantity' => $request->input('quantity')
            ]);
        return redirect()->route('admin.update');
    }
}
