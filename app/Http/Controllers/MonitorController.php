<?php

namespace App\Http\Controllers;

use App\Models\Monitor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Awal;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if (request()->segment(1) == 'monitor4') {
            $uuid = $request['reg'];
            $posts = Monitor::where('uuid', $uuid)->get();
            // dd($uuid);
            $awal = Awal::where('uuid', $uuid)->first();
            return view('monitor.monitor', compact('posts', 'awal'));
        } else {
            return view('monitor.monitor');
        }
    }

    public function lap_analisa(Request $request)
    {
        //  dd($request['reg']);
        $uuid = $request['reg'];
        $posts = Monitor::where('uuid', $uuid)->get();
        // dd($uuid);
        $awal = Awal::where('uuid', $uuid)->first();
        return view('monitor.lap_analisa', compact('posts', 'awal'));
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
     * @param  \App\Models\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function show(Monitor $monitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Monitor $monitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monitor $monitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monitor $monitor)
    {
        //
    }
}