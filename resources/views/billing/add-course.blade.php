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
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Add New Course</span></h4>
                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="{{url('/')}}/billings/courses" class="btn btn-link btn-float text-body"><i class="icon-bars-alt text-primary"></i><span>All Courses</span></a>

                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="{{url('/')}}/billings/students" class="breadcrumb-item">Billings</a>
                        <span class="breadcrumb-item active">Add New Course</span>
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


                        <div class="card-body">
                            <form action="{{url('/')}}/billings/add-course-post" method="POST" id="Enroll-Form" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Course Title:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="title" id="student-name-1265" placeholder="Course Name" autocomplete="student-name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--  --}}
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12">
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Course Price:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="price" id="student-name-1265"  placeholder="" autocomplete="student-name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                {{--  --}}
                                {{-- <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Tutor:</label>
                                            <div class="col-lg-10">
                                                <div class="form-group" data-select2-id="207">

                                                    <select name="tutor" class="form-control select-search select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true">
                                                        <optgroup label="Tutors" data-select2-id="208">
                                                            @foreach ($Tutor as $tutor)
                                                               <option value="{{$tutor->id}}" data-select2-id="68{{$tutor->id}}">{{$tutor->name}}</option>
                                                            @endforeach
                                                        </optgroup>

                                                    </select>

                                                   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                <hr>



                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">
                                        Add Course <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
                                    </button>
                                    <p id="Success" style="padding:10px" class="alert-success">Course Has Been Enrolled Successfully</p>
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
