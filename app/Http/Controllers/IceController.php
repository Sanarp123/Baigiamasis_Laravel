<?php

namespace App\Http\Controllers;

use App\Models\ice;
use App\Http\Requests\StoreiceRequest;
use App\Http\Requests\UpdateiceRequest;

class IceController extends Controller
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
     * @param  \App\Http\Requests\StoreiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ice  $ice
     * @return \Illuminate\Http\Response
     */
    public function show(ice $ice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ice  $ice
     * @return \Illuminate\Http\Response
     */
    public function edit(ice $ice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateiceRequest  $request
     * @param  \App\Models\ice  $ice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateiceRequest $request, ice $ice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ice  $ice
     * @return \Illuminate\Http\Response
     */
    public function destroy(ice $ice)
    {
        //
    }
}
