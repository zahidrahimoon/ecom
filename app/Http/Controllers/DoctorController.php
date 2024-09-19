<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function showDoctors() {
        // Fetch all doctors from the database
        $doctors = Doctor::all();

        // Check if data is being retrieved
        if ($doctors->isEmpty()) {
            return view('doctors')->with('doctors', []);
        }

        // Pass the doctors data to the view
        return view('doctors', compact('doctors'));
    }
}
