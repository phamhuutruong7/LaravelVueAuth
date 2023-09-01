<?php
namespace App\Http\Services;

use App\Http\Services\Abstractions\IProductService;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;


class ProductService implements IProductService
{
    protected $productService;

    public function __construct(IProductService $productService)
    {
        $this->productService = $productService;
    }

    public function getAllProducts()
    {
        return 'dummyText';
    }

    public function addProduct(StoreProductRequest $request){}

    public function getProduct($productId){}

    public function updateProduct(UpdateProductRequest $request, $productId){}

    public function delete($productId){}
}
