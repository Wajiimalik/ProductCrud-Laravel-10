<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "tb_products";
    protected $fillable = ['name', 'price', 'stock', 'description', 'created_at', 'updated_at'];
    use HasFactory;

    protected static function saveProduct($data)
    {
        $product = Product::create([
            'name' => $data['name'],
            'price' => $data['price'],
            'stock' => $data['stock'],
            'description' => $data['description']
        ]);
        return $product->id;
    }

    protected static function getAllProducts()
    {
        return Product::all();
    }

    protected static function getProductByID($id)
    {
        return Product::find($id);
    }

    protected static function updateProduct($data, $id)
    {
        $product = Product::getProductByID($id);

        $product->name = $data['name']; 
        $product->price = $data['price']; 
        $product->stock = $data['stock']; 
        $product->description = $data['description']; 

        $product->save();

        return $product->id;
    }

    protected static function deleteProduct($id)
    {
        $product = Product::getProductByID($id);
        $product->delete();
    }
}
