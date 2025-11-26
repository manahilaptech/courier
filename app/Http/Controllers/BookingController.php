<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // Show booking form
    public function create()
    {
        return view('booking-create');
    }

    // Handle form submission
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'required',
            'address' => 'required',
            'service' => 'required',
            'date' => 'required|date',
            'message' => 'nullable|string',
        ]);

        // Add user_id automatically (logged-in user)
        $validated['user_id'] = Auth::id();

        // Create booking
        Booking::create($validated);

        // Redirect back with success message
        return redirect()
            ->route('booking.form')
            ->with('success', '✅ Your booking has been submitted successfully!');
    }
}