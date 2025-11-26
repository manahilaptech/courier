




<?php $__env->startSection('content'); ?>
<div class="admin-dashboard">

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="#">📊 Dashboard</a></li>
            <li><a href="#">👥 Users</a></li>
            <li><a href="booking-create">📦 Bookings</a></li>
            <li><a href="contact">💬 Messages</a></li>
            <li><a href="<?php echo e(route('logout')); ?>">🚪 Logout</a></li>
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
        <h3>📦 <?php echo e($totalBookings); ?></h3>
        <p>Total Bookings</p>
    </div>
    <div class="stat-card">
        <h3>👥 <?php echo e($totalUsers); ?></h3>
        <p>Registered Users</p>
    </div>
    <div class="stat-card">
        <h3>💬 <?php echo e($totalMessages); ?></h3>
        <p>Messages Received</p>
    </div>
    <div class="stat-card">
        <h3>🚚 <?php echo e($delivered); ?></h3>
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
            <?php $__currentLoopData = $recentBookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($booking->name); ?></td>
                    <td><?php echo e($booking->city); ?></td>
                    <td><?php echo e($booking->service); ?></td>
                    <td><?php echo e($booking->date); ?></td>
                    <td>
                        <span class="status 
                            <?php if($booking->status == 'Pending'): ?> pending 
                            <?php elseif($booking->status == 'Shipped'): ?> shipped 
                            <?php elseif($booking->status == 'Delivered'): ?> delivered 
                            <?php endif; ?>">
                            <?php echo e($booking->status); ?>

                        </span>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ramee\OneDrive\Desktop\eproject\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>