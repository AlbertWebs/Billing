<div class="sidebar-section">
    <ul class="nav nav-sidebar" data-nav-type="accordion">

        <!-- Main -->
        <li class="nav-item @if($Group == "home") nav-item-expanded nav-item-open @endif">
            <a href="{{url('/billings/students')}}" class="nav-link"><i class="icon-home"></i> <span> Dashboard </span></a>
        </li>
         <!-- /main -->
          {{-- <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-graduation-cap mr-3"></span> Courses & Schools</div> <i class="icon-menu" title="Reports"></i></li> --}}
        <li class="nav-item-divider"></li>
        {{-- <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-user mr-3"></span> Students & Users</div> <i class="icon-menu" title="Forms"></i></li> --}}

        <li class="nav-item @if($Group == "students") nav-item-expanded nav-item-open @endif">
            @if(Auth::User()->role == "Super Admin")
            <a href="#" class="nav-link"><i class="icon-user"></i> <span> Students & Users</span></a>
            @else
            <a href="#" class="nav-link"> <span class="fas fa-user mr-3"> Enroll</span></a>
            @endif
            <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                {{-- <li class="nav-item"><a href="{{url('/')}}/billings/students" class="nav-link @if($Active == "students") active @endif">All Students</a></li> --}}
                <li class="nav-item"><a href="{{url('/')}}/billings/students-enroll" class="nav-link @if($Active == "enroll") active @endif">Enroll</a></li>
                @if(Auth::User()->role == "Super Admin")
                <li class="nav-item"><a href="{{url('/')}}/billings/users" class="nav-link @if($Active == "users") active @endif">All Admins</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/add-user" class="nav-link @if($Active == "add user") active @endif">Add Admin</a></li>
                @endif
            </ul>
        </li>
        <li class="nav-item-divider"></li>


        {{-- <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-graduation-cap mr-3"></span> Schools & Courses</div> <i class="icon-menu" title="Reports"></i></li> --}}
        @if(Auth::User()->role == "Super Admin")
        <li class="nav-item  @if($Group == "courses") nav-item-expanded nav-item-open @endif">
            <a href="#" class="nav-link"><i class="icon-graduation2"></i> <span> Schools & Courses</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                <li class="nav-item"><a href="{{url('/')}}/billings/courses" class="nav-link @if($Active == "courses") active @endif">All Courses</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/schools" class="nav-link @if($Active == "schools") active @endif">All Schools</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/add-school" class="nav-link  @if($Active == "add school") active @endif">Add School</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/add-course" class="nav-link @if($Active == "add course") active @endif">Add Course</a></li>
            </ul>
        </li>
        <li class="nav-item-divider"></li>
        @endif

        {{-- <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-money-bill mr-3"></span> Billing</div> <i class="icon-menu" title="Reports"></i></li> --}}
        <li class="nav-item  @if($Group == "billings") nav-item-expanded nav-item-open @endif">
            <a href="#" class="nav-link"> <i class="icon-cash"></i> <span> Payments</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                {{-- <li class="nav-item"><a href="{{url('/')}}/billings/create-bill" class="nav-link @if($Active == "create-bill") active @endif">Record Payment</a></li> --}}
                <li class="nav-item"><a href="{{url('/')}}/billings/my-payments" class="nav-link @if($Active == "my-payments") active @endif">All Payments</a></li>
                {{-- <li class="nav-item"><a href="{{url('/')}}/billings/m-pesa" class="nav-link @if($Active == "m-pesa") active @endif">M-PESA Payment</a></li> --}}
            </ul>
        </li>
        <li class="nav-item-divider"></li>
        <!-- Forms -->

        <!-- /forms -->

        <!-- Components -->
        {{-- <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-book-open mr-3"></span> Reports</div> <i class="icon-menu" title="Reports"></i></li> --}}
        <li class="nav-item  @if($Group == "reports") nav-item-expanded nav-item-open @endif">
            <a href="#" class="nav-link"><i class="icon-notebook"></i> <span><span> Reports</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                <li class="nav-item"><a href="{{url('/')}}/billings/income-today" class="nav-link @if($Active == "today") active @endif">Todays Fees Income</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/income-this-week" class="nav-link @if($Active == "week") active @endif">Weekly Fees Income</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/income-this-month" class="nav-link @if($Active == "month") active @endif">Monthly Fees Income</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/income-search" class="nav-link @if($Active == "search") active @endif">Search Date</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/income-search-range" class="nav-link @if($Active == "search-r") active @endif">Search Date Range</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/total-receivable" class="nav-link @if($Active == "receivable") active @endif">Balance</a></li>
                {{-- <li class="nav-item"><a href="{{url('/')}}/billings/total-overpayed" class="nav-link @if($Active == "overpayed") active @endif">Total Overpayed</a></li> --}}
                <li class="nav-item"><a href="{{url('/')}}/billings/bank-deposit" class="nav-link @if($Active == "deposits") active @endif">Bank Deposits</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/report-expenses" class="nav-link @if($Active == "expenses") active @endif">Expenses</a></li>
                <?php $status = "Active" ?>
                <li class="nav-item"><a href="{{url('/')}}/billings/students-report/{{$status}}" class="nav-link @if($Active == "deposits") active @endif">Student {{$status}}</a></li>
                <?php $status = "Graduated" ?>
                <li class="nav-item"><a href="{{url('/')}}/billings/students-report/{{$status}}" class="nav-link @if($Active == "deposits") active @endif">Student {{$status}}</a></li>
                <?php $status = "Left" ?>
                <li class="nav-item"><a href="{{url('/')}}/billings/students-report/{{$status}}" class="nav-link @if($Active == "deposits") active @endif">Student {{$status}}</a></li>

                <li class="nav-item"><a href="{{url('/')}}/billings/students-registered" class="nav-link @if($Active == "deposits") active @endif">Student Registered Today</a></li>

                <li class="nav-item"><a href="{{url('/')}}/billings/students-registered-week" class="nav-link @if($Active == "deposits") active @endif">Student Registered This Week</a></li>

                <li class="nav-item"><a href="{{url('/')}}/billings/students-registered-date" class="nav-link @if($Active == "deposits") active @endif">Student Registered on Date</a></li>

                <li class="nav-item"><a href="{{url('/')}}/billings/students-registered-month" class="nav-link @if($Active == "deposits") active @endif">Students Registered 30 Days Ago</a></li>


            </ul>
        </li>
        <li class="nav-item-divider"></li>
        {{--  --}}
        {{-- <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><span class="fas fa-money-check mr-3"></span> Income & Expenses</div> <i class="icon-menu" title="Reports"></i></li> --}}
        <li class="nav-item  @if($Group == "income") nav-item-expanded nav-item-open @endif">
            <a href="#" class="nav-link"><i class="icon-cash3"></i> <span> Income & Expenses</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                <li class="nav-item"><a href="{{url('/')}}/billings/income" class="nav-link @if($Active == "income") active @endif">Income</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/expenses" class="nav-link @if($Active == "expenses") active @endif">Expenses</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/record-expenses" class="nav-link @if($Active == "expenses") active @endif">Record Expenses</a></li>
                @if(Auth::User()->role == "Super Admin")
                <li class="nav-item"><a href="{{url('/')}}/billings/correct-books" class="nav-link @if($Active == "expenses") active @endif">Correct Books</a></li>
                @endif
            </ul>
        </li>
        <li class="nav-item-divider"></li>
        @if(Auth::User()->role == "Super Admin")
        <li class="nav-item  @if($Group == "income") nav-item-expanded nav-item-open @endif">
            <a href="#" class="nav-link"><i class="icon-cash"></i> <span> Bank </span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                <li class="nav-item"><a href="{{url('/')}}/billings/deposits-to-bank" class="nav-link @if($Active == "expenses") active @endif">Deposit To Bank</a></li>
                <li class="nav-item"><a href="{{url('/')}}/billings/bank-deposits" class="nav-link @if($Active == "expenses") active @endif">Bank Deposits</a></li>
            </ul>
        </li>
        @endif
        @if(Auth::User()->role == "Super Admin")
        <li class="nav-item-divider"></li>
        <li class="nav-item  @if($Group == "m-pesa") nav-item-expanded nav-item-open @endif">
            <a href="#" class="nav-link"> <i class="icon-cash4"></i> <span><span> M-PESA </span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                {{-- <li class="nav-item"><a href="{{url('/')}}/billings/stk" class="nav-link @if($Active == "stk") active @endif">STK Payments</a></li> --}}
                <li class="nav-item"><a href="{{url('/')}}/billings/c2b" class="nav-link @if($Active == "c2b") active @endif">C2B Payments</a></li>
            </ul>
        </li>
        <li class="nav-item-divider"></li>
        @endif


        @if(Session::has('partials') OR Session::has('billing') OR Session::has('user'))
        <li class="nav-item ">
            <a href="{{url('/')}}/billings/session-destroy" class="nav-link"><i class="icon-pencil3"></i> <span class="fas fa-recycle mr-3"> Reset All Forms</span></a>
        </li>
        @endif

        <li class="nav-item @if($Group == "activity") nav-item-expanded nav-item-open @endif">
            <a onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" href="{{url('/logout')}}" class="nav-link"><i class="icon-switch2"></i> <span> Logout </span></a>
        </li>
        <li class="nav-item-divider"></li>


        @if(Auth::User()->role == "Super Admin")
        <li class="nav-item @if($Group == "activity") nav-item-expanded nav-item-open @endif">
            <a href="{{url('/billings/activity')}}" class="nav-link"><i class="icon-eye4"></i> <span> Activity Log </span></a>
        </li>
        <li class="nav-item-divider"></li>
        @endif


        @if(Auth::User()->role == "Super Admin")
        <?php $Campuses = DB::table('settings')->get(); ?>
        <li class="nav-item  @if($Group == "campuses") nav-item-expanded nav-item-open @endif">
            <a href="#" class="nav-link"><i class="icon-tab"></i> <span><span> Swich Campus </span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                @foreach ($Campuses as $campus)
                @if($campus->id == Auth::User()->campus)

                @else
                <li class="nav-item"><a href="{{url('/')}}/billings/switch-campus/{{$campus->id}}" class="nav-link @if($Active == "c2b") active @endif">{{$campus->name}}</a></li>
                @endif
                @endforeach
                <li class="nav-item"><a href="{{url('/')}}/billings/add-campus" class="nav-link @if($Active == "campuses") active @endif">Add New Campus</a></li>
            </ul>
        </li>
        @endif


    </ul>
</div>
