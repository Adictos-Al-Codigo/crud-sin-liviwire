<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function view(){
        return view('Pages.view_ventas');
    }

    public function save(Request $req){
        $product = new ProductsModel;
        $product->ProductName = $req->product_name;
        $product->SupplierID = $req->supplier;
        $product->CatedoryID = $req->category;
        $product->Unit = $req->unit;
        $product->Price = $req->price;
        $product->save();
        return redirect('Ventas');
    }

    public function view_list_of_products(){
        $products= ProductsModel::where('Estado',false)->get();
        return view('Pages.view_list_of_products',compact('products'));
    }

    public function edit($id){
        $object = ProductsModel::find($id);
        return view('Pages.show_edit_product',compact('object'));
    }

    public function update(Request $request, $id){
        $product = ProductsModel::find($id);
        $product->ProductName = $request->product_name;
        $product->SupplierID = $request->supplier;
        $product->CatedoryID = $request->category;
        $product->Unit = $request->unit;
        $product->Price = $request->price;
        $product->save();
        return redirect('List-Products');
    }

    public function delete($id){
        $product = ProductsModel::find($id);
        $product->Estado = true;
        $product->save();
        return redirect('List-Products');
    }
}
