<?php

namespace App\Http\Controllers;

use App\Models\vandens_temperatura;
use App\Http\Requests\Storevandens_temperaturaRequest;
use App\Http\Requests\Updatevandens_temperaturaRequest;

class VandensTemperaturaController extends Controller
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
     * @param  \App\Http\Requests\Storevandens_temperaturaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storevandens_temperaturaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vandens_temperatura  $vandens_temperatura
     * @return \Illuminate\Http\Response
     */
    public function show(vandens_temperatura $vandens_temperatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vandens_temperatura  $vandens_temperatura
     * @return \Illuminate\Http\Response
     */
    public function edit(vandens_temperatura $vandens_temperatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatevandens_temperaturaRequest  $request
     * @param  \App\Models\vandens_temperatura  $vandens_temperatura
     * @return \Illuminate\Http\Response
     */
    public function update(Updatevandens_temperaturaRequest $request, vandens_temperatura $vandens_temperatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vandens_temperatura  $vandens_temperatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(vandens_temperatura $vandens_temperatura)
    {
        //
    }
}
