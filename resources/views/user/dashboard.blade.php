@extends('layout')

@section('content')
<div class="user-dashboard" style="max-width: 1000px; margin: 40px auto; padding: 20px;">

    {{-- Success Message --}}
    @if(session('success'))
        <div style="background:#d1fae5; color:#065f46; padding:10px 15px; border-radius:6px; margin-bottom:15px; text-align:center;">
            {{ session('success') }}
        </div>
    @endif

    <h2 style="text-align:center; color:#1e3a8a; margin-bottom:20px;">Welcome, {{ Auth::user()->name }}</h2>

    {{-- Booking Summary --}}
    <div style="display:flex; justify-content:space-between; gap:15px; margin-bottom:25px;">
        <div style="flex:1; background:#1e3a8a; color:white; padding:20px; border-radius:8px; text-align:center;">
            <h3>Total Bookings</h3>
            <p style="font-size:22px; font-weight:bold;">{{ $totalBookings }}</p>
        </div>
        <div style="flex:1; background:#f59e0b; color:white; padding:20px; border-radius:8px; text-align:center;">
            <h3>Pending</h3>
            <p style="font-size:22px; font-weight:bold;">{{ $pending }}</p>
        </div>
        <div style="flex:1; background:#16a34a; color:white; padding:20px; border-radius:8px; text-align:center;">
            <h3>Delivered</h3>
            <p style="font-size:22px; font-weight:bold;">{{ $delivered }}</p>
        </div>
    </div>

    {{-- Bookings Table --}}
    <div style="background:white; border-radius:8px; box-shadow:0 3px 8px rgba(0,0,0,0.1); overflow-x:auto;">
        <h3 style="text-align:center; background:#1e3a8a; color:white; padding:10px 0; border-radius:8px 8px 0 0;">Your Bookings</h3>

        @if($userBookings->isEmpty())
            <p style="text-align:center; padding:20px;">No bookings yet.</p>
        @else
            <table style="width:100%; border-collapse:collapse;">
                <thead>
                    <tr style="background:#f3f4f6; color:#1e3a8a;">
                        <th style="padding:10px; border-bottom:2px solid #ddd;">Service</th>
                        <th style="padding:10px; border-bottom:2px solid #ddd;">City</th>
                        <th style="padding:10px; border-bottom:2px solid #ddd;">Date</th>
                        <th style="padding:10px; border-bottom:2px solid #ddd;">Status</th>
                        <th style="padding:10px; border-bottom:2px solid #ddd;">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($userBookings as $booking)
                        <tr style="text-align:center;">
                            <td style="padding:10px; border-bottom:1px solid #eee;">{{ $booking->service }}</td>
                            <td style="padding:10px; border-bottom:1px solid #eee;">{{ $booking->city }}</td>
                            <td style="padding:10px; border-bottom:1px solid #eee;">{{ $booking->date }}</td>
                            <td style="padding:10px; border-bottom:1px solid #eee; color:
                                {{ $booking->status === 'Delivered' ? '#16a34a' : '#f59e0b' }}">
                                {{ $booking->status ?? 'Pending' }}
                            </td>
                            <td style="padding:10px; border-bottom:1px solid #eee;">{{ $booking->message ?? '—' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

</div>
@endsection