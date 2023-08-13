<?php

namespace App\Http\Services\Abstractions;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

interface IProductService{
    public function getAllProducts();
    public function addProduct(StoreProductRequest $request);
    public function getProduct($productId);
    public function updateProduct(UpdateProductRequest $request, $productId);
    public function delete($productId);
}
