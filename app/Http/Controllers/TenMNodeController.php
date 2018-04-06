<?php

namespace station\Http\Controllers;

use Illuminate\Http\Request;
use station\TenMeterNode;
use station\Station;
use station\Sensor;

class TenMNodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all()->toArray();
        $tenMeterNodes = TenMeterNode::all()->toArray();
        $insulationsensors = Sensor::where('node_type','10m_node')
                                    ->where('parameter_read', 'insulation')
                                    ->get();
        $windspeedsensors = Sensor::where('node_type','10m_node')
                                    ->where('parameter_read', 'wind speed')
                                    ->get();
        $winddirectionsensors = Sensor::where('node_type','10m_node')
                                    ->where('parameter_read', 'wind direction')
                                    ->get();
        
        
        return view('layouts.configureTenmNode',compact('tenMeterNodes','stations','insulationsensors','windspeedsensors','winddirectionsensors'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
