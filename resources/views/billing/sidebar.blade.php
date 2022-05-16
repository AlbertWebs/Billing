<div class="sidebar-section">
    <ul class="nav nav-sidebar" data-nav-type="accordion">

        <!-- Main -->

         <!-- /main -->
          {{-- <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-graduation-cap mr-3"></span> Courses & Schools</div> <i class="icon-menu" title="Reports"></i></li> --}}
        <li class="nav-item-divider"></li>
        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-user mr-3"></span> Students & Users</div> <i class="icon-menu" title="Forms"></i></li>
        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/reports" class="nav-link"><i class="icon-grid"></i> <span class="far fa-user mr-3"> Students & Users</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                <li class="nav-item"><a href="{{url('/')}}/billings/students" class="nav-link">All Students</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/users" class="nav-link">All Users</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/students-enroll" class="nav-link">Add Enroll</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/add-user" class="nav-link">Add User</a></li>
            </ul>
        </li>
        <li class="nav-item-divider"></li>


        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-graduation-cap mr-3"></span> Schools & Courses</div> <i class="icon-menu" title="Reports"></i></li>

        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/reports" class="nav-link"><i class="icon-grid"></i> <span class="fas fa-graduation-cap mr-3"> Schools & Courses</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                <li class="nav-item"><a href="{{url('/')}}/billings/courses" class="nav-link">All Courses</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/schools" class="nav-link">All Schools</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/add-school" class="nav-link">Add School</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/add-course" class="nav-link">Add Course</a></li>
            </ul>
        </li>
        <li class="nav-item-divider"></li>

        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-money-bill mr-3"></span> Billing</div> <i class="icon-menu" title="Reports"></i></li>
        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/reports" class="nav-link"><i class="icon-grid"></i> <span class="fas fa-money-bill mr-3"> Billing</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                <li class="nav-item"><a href="{{url('/')}}/billings/create-bill" class="nav-link">Record Payment</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/my-payments" class="nav-link">All Payments</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/m-pesa" class="nav-link">M-PESA Payment</a></li>
            </ul>
        </li>
        <li class="nav-item-divider"></li>
        <!-- Forms -->

        <!-- /forms -->

        <!-- Components -->
        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-book-open mr-3"></span> Reports</div> <i class="icon-menu" title="Reports"></i></li>
        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/reports" class="nav-link"><i class="icon-grid"></i> <span class="fas fa-book-open mr-3"><span> Reports</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                <li class="nav-item"><a href="{{url('/')}}/billings/income-today" class="nav-link">Todays Income</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/income-this-week" class="nav-link">Weekly Income</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/income-this-month" class="nav-link">Monthly Income</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/income-search" class="nav-link">Search Date</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/income-search-range" class="nav-link">Search Date Range</a></li>
                <li class="nav-item"><a href="components_tabs.html" class="nav-link">Total Receivable</a></li>
            </ul>
        </li>
        <li class="nav-item-divider"></li>


        <!-- /page kits -->
         <!-- Forms -->
         <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-cog mr-3"></span> System Settings</div> <i class="icon-menu" title="Forms"></i></li>
         <li class="nav-item nav-item-submenu">
             <a href="{{url('/')}}/billings/system-settings" class="nav-link"><i class="icon-pencil3"></i> <span>System Settings</span></a>
         </li>
        <li class="nav-item-divider"></li>
        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/session-destroy" class="nav-link"><i class="icon-pencil3"></i> <span>Reset Forms</span></a>
        </li>
    </ul>
</div>
