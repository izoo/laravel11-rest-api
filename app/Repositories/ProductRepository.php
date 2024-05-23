<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return Product::all();
    }

    public function getById($id)
    {
        return Product::findOrFail($id);
    }
    public function store(array $data)
    {
        $product = Product::create($data);
        return $product;
    }
    public function update(array $data, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($data);
        return $product;
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }
}
