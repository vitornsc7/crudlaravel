<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public readonly Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        $products = $this->product->all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
    {
        $created = $this->product->create($request->validated());

        return $created
            ? redirect()->route('products.index')->with('message', 'Produto criado com sucesso!')
            : redirect()->back()->with('message', 'Erro ao criar produto.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(UpdateProductRequest $request, string $id)
    {
        $updated = $this->product->where('id', $id)->update($request->validated());

        return $updated
            ? redirect()->route('products.index')->with('message', 'Produto atualizado com sucesso!')
            : redirect()->back()->with('message', 'Erro ao atualizar produto.');
    }

    public function destroy(string $id)
    {
        $this->product->where('id', $id)->delete();
        return redirect()->route('products.index')->with('message', 'Produto excluído com sucesso!');
    }
}