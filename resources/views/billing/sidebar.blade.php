<div class="sidebar-section">
    <ul class="nav nav-sidebar" data-nav-type="accordion">

        <!-- Main -->
        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="far fa-address-book mr-3"></span> Student Center</div> <i class="icon-menu " title="Main"></i></li>

        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/students" class="nav-link"><i class="icon-copy"></i> <span>All Students</span></a>


        </li>
        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/students-enroll" class="nav-link"><i class="icon-color-sampler"></i> <span>Enroll Student</span></a>
        </li>

        <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Alumni</span></a>
        </li>

        <!-- /main -->

        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-book-open mr-3"></span> Courses </div> <i class="icon-menu " title="Main"></i></li>


        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/courses" class="nav-link"><i class="icon-copy"></i> <span>All Courses</span></a>


        </li>
        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/add-course" class="nav-link"><i class="icon-color-sampler"></i> <span>Add Course</span></a>
        </li>



        {{--  --}}

        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-user-tie mr-3"></span> Tutors </div> <i class="icon-menu " title="Main"></i></li>


        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/tutors" class="nav-link"><i class="icon-copy"></i> <span>All Tutors</span></a>
        </li>
        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/add-tutors" class="nav-link"><i class="icon-color-sampler"></i> <span>Add Tutor</span></a>
        </li>


        <!-- /main -->

        <!-- Forms -->
        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-money-bill mr-3"></span> Billing</div> <i class="icon-menu" title="Forms"></i></li>
        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/create-bill" class="nav-link"><i class="icon-pencil3"></i> <span>Record Payment</span></a>
        </li>

        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/my-payments" class="nav-link"><i class="icon-pencil3"></i> <span>All Payments</span></a>
        </li>
        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/editable-invoice" class="nav-link"><i class="icon-pencil3"></i> <span>Editable Invoice</span></a>
        </li>
        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/m-pesa" class="nav-link"><i class="icon-pencil3"></i> <span>M-PESA Payment</span></a>
        </li>
        <!-- /forms -->

        <!-- Components -->
        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-book-open mr-3"></span> Reports</div> <i class="icon-menu" title="Reports"></i></li>
        <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/reports" class="nav-link"><i class="icon-grid"></i> <span>Students Reports</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                <li class="nav-item"><a href="components_modals.html" class="nav-link">Students By Course</a></li>
                <li class="nav-item"><a href="components_dropdowns.html" class="nav-link">Student By Year</a></li>
                <li class="nav-item"><a href="components_tabs.html" class="nav-link">Student By Campus</a></li>
                <li class="nav-item-divider"></li>
            </ul>
        </li>
        <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link"><i class="icon-puzzle2"></i> <span>Billing Reports</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Content styling">
                <li class="nav-item"><a href="content_page_header.html" class="nav-link">Today's Payments</a></li>
                <li class="nav-item"><a href="content_cards.html" class="nav-link">This Week Payments</a></li>
                <li class="nav-item"><a href="content_page_panels.html" class="nav-link">Payment By Date</a></li>
                <li class="nav-item-divider"></li>
            </ul>
        </li>

        <!-- /page kits -->
         <!-- Forms -->
         <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-cog mr-3"></span> System Settings</div> <i class="icon-menu" title="Forms"></i></li>
         <li class="nav-item nav-item-submenu">
             <a href="{{url('/')}}/billings/system-settings" class="nav-link"><i class="icon-pencil3"></i> <span>System Settings</span></a>
         </li>
         <li class="nav-item nav-item-submenu">
            <a href="{{url('/')}}/billings/session-destroy" class="nav-link"><i class="icon-pencil3"></i> <span>Reset Forms</span></a>
        </li>

    </ul>
</div>
