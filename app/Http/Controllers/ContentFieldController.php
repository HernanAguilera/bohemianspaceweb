<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContentFieldRequest;
use App\Http\Requests\UpdateContentFieldRequest;
use App\Models\ContentField;

class ContentFieldController extends Controller
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
     * @param  \App\Http\Requests\StoreContentFieldRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContentFieldRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContentField  $contentField
     * @return \Illuminate\Http\Response
     */
    public function show(ContentField $contentField)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContentField  $contentField
     * @return \Illuminate\Http\Response
     */
    public function edit(ContentField $contentField)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContentFieldRequest  $request
     * @param  \App\Models\ContentField  $contentField
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContentFieldRequest $request, ContentField $contentField)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContentField  $contentField
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContentField $contentField)
    {
        //
    }
}
