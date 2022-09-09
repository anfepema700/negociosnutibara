<?php

namespace App\Http\Controllers;

use App\Models\customers;
use App\Models\cities;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['cities']=Cities::all();
        $datacustomers['customers']=Customers::all();
        return view('customers/index',$datos,$datacustomers);
//        return view('customers.index');
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
        $datacustomers  = request()->except('_token');
        Customers::insert($datacustomers);
        //return response()->json($datacustomers);
        return redirect('customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $customer=Customers::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datacustomers  = request()->except(['_token','_method']);
        Customers::where('id','=',$id)->update($datacustomers);
        return redirect('customers');
        /*$customer=Customers::findOrFail($id);
        return view('customers.edit', compact('customer'));
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customers::destroy($id);
        return redirect('customers');
    }
}
