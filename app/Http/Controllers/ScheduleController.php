<?php

namespace App\Http\Controllers;
use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $schedule = new Schedule();
        $schedule->start_date = $request->input('start_date');
        $schedule->start_time = $request->input('start_time');
        $schedule->end_date = $request->input('end_date');
        $schedule->end_time = $request->input('end_time');
        $schedule->company_id = $request->input('company_id');
        $schedule->save();
        return $schedule;
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
    public function updatePadrao(Request $request, $id){

        Schedule::where('company_id',$request->input('company_id'))->update(['default'=>false]);
        $schedule = Schedule::find($id);
        $schedule->default = true;
        $schedule->save();

        return $schedule;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $schedule = Schedule::find($id);
        $schedule->delete();
        return $schedule;
    }
}
