<?php

namespace App\Http\Controllers;

use App\Location;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
		$locations = Location::all();
		return view('locations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Location $location
     * @return Response
     */
    public function show(Location $location)
    {
		return view('locations.show',compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Location $location
     * @return Response
     */
    public function edit(Location $location)
    {
		return view('locations.edit',compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  Location $location
     * @return Response
     */
    public function update(Request $request, Location $location)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Location $location
     * @return Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
