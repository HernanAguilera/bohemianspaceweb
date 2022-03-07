<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryContentRequest;
use App\Http\Requests\UpdateCategoryContentRequest;
use App\Models\CategoryContent;

class CategoryContentController extends Controller
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
     * @param  \App\Http\Requests\StoreCategoryContentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryContentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryContent  $categoryContent
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryContent $categoryContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryContent  $categoryContent
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryContent $categoryContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryContentRequest  $request
     * @param  \App\Models\CategoryContent  $categoryContent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryContentRequest $request, CategoryContent $categoryContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryContent  $categoryContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryContent $categoryContent)
    {
        //
    }
}
