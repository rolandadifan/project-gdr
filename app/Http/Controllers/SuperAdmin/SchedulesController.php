<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    public function index()
    {
        $schedule = Schedule::orderBy('created_at', 'DESC')->get();
        // dd( $schedule);
        return view('superadmin.pages.schedule.index')->with([
            'schedule' =>$schedule
        ]);
    }

    public function create()
    {
        return view('superadmin.pages.schedule.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Schedule::create($data);
        return redirect()->route('schedules.index')->with('status', 'Successfully Create Schedules');
    }

     public function edit($id)
    {
         $schedule = Schedule::findOrFail($id);
        return view('superadmin.pages.schedule.edit')->with([
            'schedule' =>  $schedule 
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $schedules = Schedule::findOrFail($id);
        $schedules->update($data);
        return redirect()->route('schedules.index')->with('status', 'Successfully Edit Schedules');
    }

     public function destroy($id)
    {
         $schedule = Schedule::findOrFail($id);
          $schedule->delete();
         return redirect()->route('schedules.index')->with('status', 'Successfully Delete Schedules');
    }
}
