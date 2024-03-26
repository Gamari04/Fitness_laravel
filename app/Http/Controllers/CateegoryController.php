<?php

namespace App\Http\Controllers;

use App\Models\Cateegory;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCateegoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCateegoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cateegory  $cateegory
     * @return \Illuminate\Http\Response
     */
    public function show(Cateegory $cateegory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cateegory  $cateegory
     * @return \Illuminate\Http\Response
     */
    public function edit(Cateegory $cateegory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCateegoryRequest  $request
     * @param  \App\Models\Cateegory  $cateegory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCateegoryRequest $request, Cateegory $cateegory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cateegory  $cateegory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cateegory $cateegory)
    {
        //
    }
}
