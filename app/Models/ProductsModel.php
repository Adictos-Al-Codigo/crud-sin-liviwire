<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table = "products";
    public $timestamps = false;
    public $fillabl = ['ProductName','SupplierID','CatedoryID','Unit','Price'];
}
