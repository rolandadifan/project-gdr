<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\KeyDate;
use App\Models\KeyDateDetail;
use Illuminate\Http\Request;

class KeyDateController extends Controller
{
    public function index()
    {
        $keys = KeyDate::with('status')->get();
        return view('superadmin.pages.key-date.index')->with([
            'keys' => $keys
        ]);
    }

    public function create()
    {
        return view('superadmin.pages.key-date.create');
    }

    public function store(Request $request)
    {
        $period = $request->period;
        $close_date = $request->close_date;
        $open_status = $request->open_status;

        $key_date = KeyDate::create([
            'status_id' => 2,
            'period' => $period,
            'open_status' => $open_status,
            'close_date' => $close_date,
        ]);

        $title = $request->title;
        $date = $request->date;
        $activities = $request->activities;

        if($title || $date || $activities){
            foreach ($title as $key => $titles) {
                KeyDateDetail::create([
                    'key_date_id' =>  $key_date->id,
                    'title' =>  $titles,
                    'date' =>  $date[$key],
                    'activities' =>  $activities[$key],
                ]);
            }
        }
        return back()->with('status', 'Successfully Create');
    }

    public function edit($id)
    {
        $keys = KeyDate::findOrFail($id);
        $keyDetail = KeyDateDetail::where('key_date_id', $keys->id)->get();
        // dd($keys);
        return view('superadmin.pages.key-date.edit')->with([
            'keys' => $keys,
            'keyDetail' => $keyDetail,
        ]);
    }

    public function update(Request $request, $id)
    {
        $period = $request->period;
        $close_date = $request->close_date;
        $open_status = $request->open_status;
        $keys = KeyDate::findOrFail($id);
        $keys->update([
            'status_id' => 2,
            'period' => $period,
            'open_status' => $open_status,
            'close_date' => $close_date,
        ]);
        return back()->with('status', 'Successfully Update');
    }

    public function createInfo(Request $request)
    {
        $data = $request->all();
        KeyDateDetail::create($data);
        return back()->with('status', 'Successfully Add Info');
    }

    public function editInfo(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $date = $request->date;
        $activities = $request->activities;
        $detail = KeyDateDetail::where('id', $id)->first();
        $detail->update([
            'title' =>  $title,
            'date' =>  $date,
            'activities' =>  $activities,
        ]);
        return back()->with('status', 'Successfully Update Info');
    }

    public function deleteInfo($id)
    {
        $detail = KeyDateDetail::findOrFail($id);
        $detail->delete();
        return back()->with('status', 'Successfully Delete Info');

    }

    public function destroy($id)
    {
        try {
            //code...
            $keys = KeyDate::findOrFail($id);
            $keys->delete();
            return back()->with('status', 'Successfully Delete Keys Dates');
        } catch (\Throwable $th) {
            return back()->with('error', 'Opps Something Wrong');
        }
    }
}
