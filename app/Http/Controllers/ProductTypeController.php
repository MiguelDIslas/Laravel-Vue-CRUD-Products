<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use App\Models\Category;
use Illuminate\Http\Request;
use  Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productTypes = ProductType::with('category')->get();
        return Inertia::render('ProductType/List/index', ['productTypes' => $productTypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return Inertia::render('ProductType/Create/index', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'category_id' => 'required',
                'name' => 'required',
                'description' => 'required',
            ]
        );

        ProductType::create($request->all());
        return Redirect::route('productTypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductType $productType)
    {
        $categories = Category::all();
        return Inertia::render('ProductType/Edit/index', ['productType' => $productType, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductType $productType)
    {
        $attributes = validator($request->all(), [
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
        ])->validate();

        $productType->update($attributes);
        return Redirect::route('productTypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductType $productType)
    {
        $productType->delete();
        return Redirect::route('productTypes.index');
    }
}
