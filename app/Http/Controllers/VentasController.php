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
        $products= ProductsModel::all();
        return view('Pages.view_list_of_products',compact('products'));
    }
}
