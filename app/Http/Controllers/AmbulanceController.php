<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
{
    public function index()
    {
        $ambulances = Ambulance::all();
        return view('ambulances.index', compact('ambulances'));
    }

    public function create()
    {
        return view('ambulances.create');
    }

    public function store(Request $request)
    {
        Ambulance::create($request->validate([
            'vehicle_number' => 'required',
            'driver_name' => 'required',
            'contact_number' => 'required',
            'status' => 'required',
        ]));

        return redirect()->route('ambulances.index');
    }

    public function edit(Ambulance $ambulance)
    {
        return view('ambulances.edit', compact('ambulance'));
    }

    public function update(Request $request, Ambulance $ambulance)
    {
        $ambulance->update($request->validate([
            'vehicle_number' => 'required',
            'driver_name' => 'required',
            'contact_number' => 'required',
            'status' => 'required',
        ]));

        return redirect()->route('ambulances.index');
    }

    public function destroy(Ambulance $ambulance)
    {
        $ambulance->delete();
        return redirect()->route('ambulances.index');
    }
}
