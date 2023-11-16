<?php

namespace App\Http\Controllers;

use App\Models\Scheduling;
use Illuminate\Http\Request;

class SchedulingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedulings = Scheduling::all();

        return view('meusAgendamentos',['schedulings'=> $schedulings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $scheduling = new Scheduling();
        $scheduling->date = $request->date;
        $scheduling->time = $request->time;
        $scheduling->status = $request->status;
        $scheduling->idUser = $request->idUser;
        $scheduling->barber = $request->barber;

        $scheduling->save();

        return redirect()->route('/')->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(Scheduling $scheduling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scheduling $scheduling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Scheduling $scheduling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scheduling $scheduling)
    {
        //
    }
}
