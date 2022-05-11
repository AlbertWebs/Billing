@extends('billing.master-forms')
@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-lg-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Add New Student</span></h4>
                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="{{url('/')}}/billings/students" class="btn btn-link btn-float text-body"><i class="icon-bars-alt text-primary"></i><span>All Students</span></a>

                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="{{url('/')}}/billings/students" class="breadcrumb-item">Billings</a>
                        <span class="breadcrumb-item active">Add New Student</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="tel:254723014032" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="{{url('/')}}/billings/system-settings" class="breadcrumb-elements-item">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Horizontal form options -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Basic layout-->
                    <div class="card">


                        <div class="card-body">
                            <form action="{{url('/')}}/billings/enroll-student" method="POST" id="Enroll-Form" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Name:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="SName" id="student-name-1265" placeholder="Full Name" autocomplete="student-name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Email:</label>
                                            <div class="col-lg-10">
                                                <input type="email" onblur="duplicateEmail(this)" name="SEmail" autocomplete="off" class="form-control" placeholder="name@domain.com">
                                                <p id="exists" style="padding:10px" class="alert-danger">The User Already Exists</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Mobile:</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="SMobile" autocomplete="off" value="+254 7" class="form-control" placeholder="+723014032">
                                            </div>
                                        </div>
                                    </div>
                                    {{--  --}}

                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Gender:</label>
                                            <div class="col-lg-8">
                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" value="Male" name="gender" checked>
                                                    <span class="custom-control-label">Male</span>
                                                </label>

                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" value="Female" name="gender">
                                                    <span class="custom-control-label">Female</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <hr>
                                <div class="text-right">
                                    @if(Session::has('user'))
                                    <a href="{{url('/')}}/billings/create-bill/{{Session::get('user')}}" class="btn btn-primary">
                                        <span class="fas fa-print mr-3"></span> Record Payment <i class="icon-paperplane ml-2"></i>
                                    </a>
                                    <a href="{{url('/')}}/billings/m-pesa/{{Session::get('user')}}" class="btn btn-primary">
                                        <span class="fas fa-print mr-3"></span> Initiate Payment <i class="icon-paperplane ml-2"></i>
                                    </a>
                                    @endif
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fas fa-save mr-3"></span> Add Student <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
                                    </button>
                                    <p id="Success" style="padding:10px" class="alert-success">Student Has Been Enrolled Successfully</p>
                                </div>


                            </form>
                        </div>
                    </div>
                    <!-- /basic layout -->
                </div>
            </div>
            <!-- /vertical form options -->

        </div>
        <!-- /content area -->


        <!-- Footer -->
        @include('billing.footer')
        <!-- /footer -->

    </div>
    <!-- /inner content -->

</div>
<!-- /main content -->
@endsection
