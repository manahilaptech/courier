


@extends('layout')

@section('content')
<div class="admin-dashboard">

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="#">📊 Dashboard</a></li>
            <li><a href="#">👥 Users</a></li>
            <li><a href="booking-create">📦 Bookings</a></li>
            <li><a href="contact">💬 Messages</a></li>
            <li><a href="{{ route('logout') }}">🚪 Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1>Welcome, Admin 👑</h1>
            <p>Manage your system overview and monitor activity in one place.</p>
        </div>

        <!-- Stats Section -->
       <div class="stats-container">
    <div class="stat-card">
        <h3>📦 {{ $totalBookings }}</h3>
        <p>Total Bookings</p>
    </div>
    <div class="stat-card">
        <h3>👥 {{ $totalUsers }}</h3>
        <p>Registered Users</p>
    </div>
    <div class="stat-card">
        <h3>💬 {{ $totalMessages }}</h3>
        <p>Messages Received</p>
    </div>
    <div class="stat-card">
        <h3>🚚 {{ $delivered }}</h3>
        <p>Deliveries Completed</p>
    </div>
</div>
        <!-- Recent Bookings Table -->
        <div class="table-container">
    <h2>Recent Bookings</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>City</th>
                <th>Service</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recentBookings as $booking)
                <tr>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->city }}</td>
                    <td>{{ $booking->service }}</td>
                    <td>{{ $booking->date }}</td>
                    <td>
                        <span class="status 
                            @if($booking->status == 'Pending') pending 
                            @elseif($booking->status == 'Shipped') shipped 
                            @elseif($booking->status == 'Delivered') delivered 
                            @endif">
                            {{ $booking->status }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection