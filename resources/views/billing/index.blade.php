@extends('billing.master')
@section('content')
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Page header -->
        <div class="page-header page-header-light">


            <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <span class="breadcrumb-item active">Dashboard</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="mailto:albertmuhatia@gmail.com" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="{{url('/')}}/billings/system-settings" class="breadcrumb-elements-item">
                                <i class="icon-gear mr-2"></i>
                                System Settings
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Default button -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-body border-top-primary">
                        <div class="text-center">
                            <a href="{{url('/')}}" class="btn btn-primary"><i class="fa fa-home mr-2"></i> Dashboard</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="card card-body border-top-primary">
                        <div class="text-center">
                            <a href="{{url('/')}}/billings/students" class="btn btn-secondary"><i class="fa fa-plus mr-2"></i><i class="fa fa-user mr-2"></i> Enroll Student</a>
                            <a href="{{url('/')}}/billings/students" class="btn btn-success"><i class="fa fa-user mr-2"></i> Students</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="card card-body border-top-primary">
                        <div class="text-center">
                            <a href="{{url('/')}}/billings/users" class="btn btn-success"><i class="fa fa-user-alt mr-2"></i> Users</a>
                            <a href="{{url('/')}}/billings/add-user" class="btn btn-secondary"><i class="fa fa-plus mr-2"></i><i class="fa fa-user-alt mr-2"></i> Add User</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-lg-4">
                    <div class="card card-body border-top-primary">
                        <div class="text-center">
                            <a href="{{url('/')}}/billings/schools" class="btn btn-warning"><i class="fa fa-plus mr-2"></i><i class="fa fa-graduation-cap mr-2"></i> Add School</a>
                            <a href="{{url('/')}}/billings/schools" class="btn btn-success"><i class="fa fa-graduation-cap mr-2"></i> Schools</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-body border-top-primary">
                        <div class="text-center">
                            <a href="{{url('/')}}/billings/courses" class="btn btn-success"><i class="fa fa-pen mr-2"></i> Courses</a>
                            <a href="{{url('/')}}/billings/add-course" class="btn btn-info"><i class="fa fa-plus mr-2"></i><i class="fa fa-pen mr-2"></i>Add Courses</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-body border-top-primary">
                        <div class="text-center">
                            <a href="{{url('/')}}/billings/create-bill" class="btn btn-secondary"><i class="fa fa-pen-fancy mr-2"></i> Record Payments</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-lg-4">
                    <div class="card card-body border-top-primary">
                        <div class="text-center">
                            <a href="{{url('/')}}/billings/my-payments" class="btn btn-secondary"><i class="fa fa-money-bill-wave mr-2"></i> All Payments</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card card-body border-top-primary">
                        <div class="text-center">
                            <a href="{{url('/')}}/billings/income-today" class="btn btn-success"><i class="fa fa-money-bill-wave-alt mr-2"></i> Today</a>
                            <a href="{{url('/')}}/billings/income-this-week" class="btn btn-success"><i class="fa fa-money-bill-wave-alt mr-2"></i> Weekly</a>
                            <a href="{{url('/')}}/billings/income-this-month" class="btn btn-success"><i class="fa fa-money-bill-wave-alt mr-2"></i> Monthly</a>
                            <a href="{{url('/')}}/billings/total-receivable" class="btn btn-success"><i class="fa fa-donate mr-2"></i> Receivables</a>
                            <a href="{{url('/')}}/billings/total-overpayed" class="btn btn-success"><i class="fa fa-money-check-alt mr-2"></i> Overpayed</a>
                            <a href="{{url('/')}}/billings/income-search" class="btn btn-success"><i class="fa fa-search-dollar mr-2"></i> Search Date</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-lg-12">
                    <div class="card card-body border-top-primary">
                        <div class="text-center">
                            <a href="{{url('/')}}/billings/income" class="btn btn-primary"><i class="fa fa-money-bill-wave-alt mr-2"></i> Income</a>
                            <a href="{{url('/')}}/billings/expenses" class="btn btn-primary"><i class="fa fa-money-bill-wave-alt mr-2"></i> Expenses</a>
                        </div>
                    </div>
                </div>
                <hr>



            </div>
            <!-- /default button -->

        </div>
        <!-- /content area -->


        <!-- Footer -->

        <!-- /footer -->

    </div>
    <!-- /inner content -->

</div>
@endsection
