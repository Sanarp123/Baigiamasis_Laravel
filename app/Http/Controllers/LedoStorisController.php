<?php

namespace App\Http\Controllers;

use App\Models\ledo_storis;
use App\Http\Requests\Storeledo_storisRequest;
use App\Http\Requests\Updateledo_storisRequest;

class LedoStorisController extends Controller
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
     * @param  \App\Http\Requests\Storeledo_storisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeledo_storisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ledo_storis  $ledo_storis
     * @return \Illuminate\Http\Response
     */
    public function show(ledo_storis $ledo_storis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ledo_storis  $ledo_storis
     * @return \Illuminate\Http\Response
     */
    public function edit(ledo_storis $ledo_storis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateledo_storisRequest  $request
     * @param  \App\Models\ledo_storis  $ledo_storis
     * @return \Illuminate\Http\Response
     */
    public function update(Updateledo_storisRequest $request, ledo_storis $ledo_storis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ledo_storis  $ledo_storis
     * @return \Illuminate\Http\Response
     */
    public function destroy(ledo_storis $ledo_storis)
    {
        //
    }
}
