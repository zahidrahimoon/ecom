<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    // Display a list of all bookings
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    // Show the form to create a new booking
    public function create()
    {
        return view('bookings.create');
    }

    // Store a newly created booking in storage
    public function store(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'hospital_name' => 'required|string|max:255',
            'hospital_address' => 'required|string|max:255',
            'customer_mobile_number' => 'required|string|max:15',
            'pickup_address' => 'required|string|max:255',
            'type' => 'required|in:Emergency,Non-Emergency',
        ]);

        // Store booking
        Booking::create($validated);

        // Redirect with success message
        return redirect()->route('bookings.index')->with('success', 'Booking created successfully!');
    }

    // Show the form for editing the specified booking
    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }

    // Update the specified booking in storage
    public function update(Request $request, Booking $booking)
    {
        // Validate incoming request
        $validated = $request->validate([
            'hospital_name' => 'required|string|max:255',
            'hospital_address' => 'required|string|max:255',
            'customer_mobile_number' => 'required|string|max:15',
            'pickup_address' => 'required|string|max:255',
            'type' => 'required|in:Emergency,Non-Emergency',
        ]);

        // Update booking
        $booking->update($validated);

        // Redirect with success message
        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully!');
    }

    // Remove the specified booking from storage
    public function destroy(Booking $booking)
    {
        // Delete booking
        $booking->delete();

        // Redirect with success message
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully!');
    }
}
