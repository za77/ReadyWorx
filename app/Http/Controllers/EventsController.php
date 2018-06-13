<?php

namespace App\Http\Controllers;

use App\events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.manageEvent.manageEvents');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.manageEvent.eventsCreate');
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
     * @param  \App\events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(events $events)
    {
        //
        return view('admin.manageEvent.eventsCreate');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(events $events)
    {
        //
        return view('admin.manageEvent.eventsEdit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(events $events)
    {
        //
    }
}
