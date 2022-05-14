@extends('billing.master-forms')
@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Content area -->
        <div class="content">

            <!-- Horizontal form options -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Basic layout-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add New User</h3>
                        </div>


                        <div class="card-body">
                            <form action="{{url('/')}}/billings/add-user" method="POST" id="Enroll-Form" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Name:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="name" id="student-name-1265" placeholder="Full Name" autocomplete="student-name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Email:</label>
                                            <div class="col-lg-10">
                                                <input type="email" onblur="duplicateEmail(this)" name="email" autocomplete="off" class="form-control" placeholder="name@domain.com">
                                                <p id="exists" style="padding:10px" class="alert-danger">The User Already Exists</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Password:</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="password" autocomplete="off" class="form-control" placeholder="P@ssW0rds">
                                                {{-- <p id="exists" style="padding:10px" class="alert-danger">The User Already Exists</p> --}}
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Is Admin:</label>
                                            <div class="col-lg-8">
                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" value="1" name="is_admin">
                                                    <span class="custom-control-label">Supper Admin</span>
                                                </label>

                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" value="0" name="is_admin" checked>
                                                    <span class="custom-control-label">Admin</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <hr>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fas fa-save mr-3"></span> Add Admin <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
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
