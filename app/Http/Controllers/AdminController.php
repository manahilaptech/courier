<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\ContactMessage;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Live counts
        $totalUsers = User::count();
        $totalBookings = Booking::count();
       $totalMessages = ContactMessage::count();
       $delivered = 0; // abhi koi status column nahi hai, so count = 0

        // Recent bookings
        $recentBookings = Booking::latest()->take(5)->get();

        $recentMessages = ContactMessage::latest()->take(5)->get(); 
        return view('admin.dashboard', compact(
            'totalUsers',
            'totalBookings',
            'totalMessages',
            'delivered',
            'recentBookings',
            'recentMessages',
        ));
    }
}