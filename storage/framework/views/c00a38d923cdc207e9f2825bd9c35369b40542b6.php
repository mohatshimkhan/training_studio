<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?php echo e(asset('backend/assets/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Training Studio</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>                                                                
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('programes.index')); ?>" class="nav-link">
                        <i class="nav-icon fas  fas fa-dumbbell"></i>
                        <p>Programes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('trainingclasses.index')); ?>" class="nav-link">
                        <i class="nav-icon fas  fas fa-walking"></i>
                        <p>Training Classes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('trainers.index')); ?>" class="nav-link">
                        <i class="nav-icon fas  fas fa-clock"></i>
                        <p>Schedules</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('trainers.index')); ?>" class="nav-link">
                        <i class="nav-icon fas  fas fa-users"></i>
                        <p>Trainers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('sitesettings.edit',1)); ?>" class="nav-link">
                        <i class="nav-icon fas  fas fa-cogs"></i>
                        <p>Settings</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside><?php /**PATH E:\wamp\www\mp\LARAV\training_studio\resources\views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>