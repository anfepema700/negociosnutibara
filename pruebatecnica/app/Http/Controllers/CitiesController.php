<?php

namespace App\Http\Controllers;

use App\Models\cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['cities']=Cities::all();
        return view('cities/index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datacities  = request()->except('_token');
        Cities::insert($datacities);
        //return response()->json($datacities);
        return redirect('cities');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function show(cities $cities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city= Cities::findOrFail($id);
        return view('cities.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datacities  = request()->except(['_token','_method']);    
        Cities::where('id','=',$id)->update($datacities);
        
        /*$city = Cities::findOrFail($id);
        return view('cities.edit',compact('city'));
        */
        return redirect('cities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cities::destroy($id);
        return redirect('cities');
    }
}
