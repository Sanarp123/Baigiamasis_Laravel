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
        $ice_all = ice::all();
        $ice_markers = array();

        foreach($ice_all as $ice_item) {
            array_push($ice_markers, array(
                'title' => $ice_item->id,
                'lat' => $ice_item->coord_x,
                'lng' => $ice_item->coord_y,
                'popup' => strval($ice_item->storis). ' cm. '. $ice_item->komentaras,
                'icon' => 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                'icon_size' => [20, 32],
                'icon_anchor' => [0, 32],
    

                
            ));
        }

        return view('main', ['ice_markers' => $ice_markers]);
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
