<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::get();
        return view('superadmin.pages.location.index')->with(['locations'=>$locations]);
    }

    public function create()
    {
        return view('superadmin.pages.location.create');
    }

    public function store(Request $request)
    {
        try {
            $location['campus'] = $request->campus;
            $location['address'] = $request->address;
            $location['phone'] = $request->phone;
            $location['ext'] = $request->ext;
            $location['fax'] = $request->fax;
            if ($request->thumbnail || $request->thumbnail != null) {
                $location['thumbnail'] = $request->file('thumbnail')->store('locations', 'public');
            }
            $saveLocation = Location::create($location);
            return back()->with('status', 'Location successfuly added');
        } catch (Exception $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function edit($id)
    {
        $location = Location::where('id',$id)->first();
        return view('superadmin.pages.location.edit')->with([
            'location'     => $location,
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $locationDB = Location::where('id',$id)->first();
            $location['campus'] = $request->campus;
            $location['address'] = $request->address;
            $location['phone'] = $request->phone;
            $location['ext'] = $request->ext;
            $location['fax'] = $request->fax;
            if ($request->thumbnail || $request->thumbnail != null) {
                if(isset($locationDB->thumbnail)){
                    $file_path = Storage::url($locationDB->thumbnail);
                    $path = str_replace('\\', '/', public_path());
                    if (file_exists($path . $file_path)) {
                        unlink($path . $file_path);
                    }
                }
                $location['thumbnail'] = $request->file('thumbnail')->store('locations', 'public');
            }
            $locationDB->update($location);
            return back()->with('status', 'Location successfuly updated');
        } catch (Exception $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        if ($location->thumbnail || $location->thumbnail != null) {
            $file_path = Storage::url($location->thumbnail);
            $path = str_replace('\\', '/', public_path());
            if (file_exists($path . $file_path)) {
                unlink($path . $file_path);
            }
        }
        $location->delete();
        return back()->with('status', 'Location Successfuly Deleted');
    }
}