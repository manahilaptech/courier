<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        // Sirf us user ki apni bookings dikhao
        $userBookings = Booking::where('user_id', $user->id)->get();

        // Count for summary cards
        $totalBookings = $userBookings->count();
        $delivered = $userBookings->where('status', 'Delivered')->count();
        $pending = $userBookings->where('status', 'Pending')->count();

        return view('user.dashboard', compact('user', 'userBookings', 'totalBookings', 'delivered', 'pending'));
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pics', 'public');
            $user->profile_picture = $path;
            $user->save();
        }

        return back()->with('success', 'Profile picture updated successfully!');
    }
}