<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContentTagRequest;
use App\Http\Requests\UpdateContentTagRequest;
use App\Models\ContentTag;

class ContentTagController extends Controller
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
     * @param  \App\Http\Requests\StoreContentTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContentTagRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContentTag  $contentTag
     * @return \Illuminate\Http\Response
     */
    public function show(ContentTag $contentTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContentTag  $contentTag
     * @return \Illuminate\Http\Response
     */
    public function edit(ContentTag $contentTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContentTagRequest  $request
     * @param  \App\Models\ContentTag  $contentTag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContentTagRequest $request, ContentTag $contentTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContentTag  $contentTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContentTag $contentTag)
    {
        //
    }
}
