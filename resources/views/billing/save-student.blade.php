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
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Edit {{$Student->name}}</span></h4>
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
                        <span class="breadcrumb-item active">Edit {{$Student->name}}</span>
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
                            <a href="{{url('/')}}/system-settings" class="breadcrumb-elements-item">
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
                        <div class="card-header">
                            <h5 class="card-title">Basic layout</h5>
                        </div>

                        <div class="card-body">
                            <form action="{{url('/')}}/billings/save-student-post/{{$Student->id}}" method="POST" id="Enroll-Form" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Name:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="SName" id="student-name-1265" value="{{$Student->name}}" placeholder="Full Name" autocomplete="student-name">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Email:</label>
                                            <div class="col-lg-10">
                                                <input type="email" name="SEmail" autocomplete="off" class="form-control" value="{{$Student->email}}"  placeholder="name@domain.com">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Mobile:</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="SMobile" autocomplete="off" value="{{$Student->mobile}}" class="form-control"  placeholder="+723014032">
                                            </div>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <hr>

                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Gender:</label>
                                            <div class="col-lg-8">
                                                @if($Student->gender == 'Male')
                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" value="Male" name="gender" checked>
                                                    <span class="custom-control-label">Male</span>
                                                </label>
                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" value="Female" name="gender">
                                                    <span class="custom-control-label">Female</span>
                                                </label>
                                                @else
                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" value="Male" name="gender" >
                                                    <span class="custom-control-label">Male</span>
                                                </label>
                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" value="Female" name="gender" checked>
                                                    <span class="custom-control-label">Female</span>
                                                </label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <hr>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Graduated</label>
                                    <div class="col-lg-10">
                                        <select name="status" class="form-control">
                                            @if($Student->status == 1)
                                            <option selected="selected" value="1">Active</option>
                                            <option value="0">Graduated</option>
                                            @else
                                            <option  value="1">Active</option>
                                            <option selected="selected" value="0">Graduated</option>
                                            @endif


                                        </select>
                                    </div>
                                </div>
                                <hr>



                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fas fa-save mr-3"></span>Save Changes <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
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
