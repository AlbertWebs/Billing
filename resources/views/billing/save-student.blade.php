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
                            <form action="{{url('/')}}/billings/enroll-student" method="POST" id="Enroll-Form" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-4">
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Name:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="SName" id="student-name-1265" placeholder="Full Name" autocomplete="student-name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Email:</label>
                                            <div class="col-lg-9">
                                                <input type="email" name="SEmail" autocomplete="off" class="form-control" placeholder="name@domain.com">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Mobile:</label>
                                            <div class="col-lg-9">
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

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Address</label>
                                            <div class="col-lg-9">

                                                        <input type="text" name="SAddress" autocomplete="off" class="form-control" placeholder="Your Physical Address">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Your avatar:</label>
                                    <div class="col-lg-9">
                                        <label class="custom-file">
                                            <input type="file" name="avatar" class="custom-file-input">
                                            <span class="custom-file-label">Choose file</span>
                                        </label>
                                        <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Course:</label>
                                            <div class="col-lg-9">
                                                <div class="form-group" data-select2-id="207">

                                                    <select name="course" class="form-control select-search select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true">
                                                        <optgroup label="Courses" data-select2-id="208">
                                                            <option value="Nuclear Science" data-select2-id="68">Nuclear Science</option>
                                                            <option value="Computer Technology" data-select2-id="209">Computer Technology</option>
                                                            <option value="Quantum Physics" data-select2-id="210">Quantum Physics</option>
                                                            <option value="Special Relativity" data-select2-id="211">Special Relativity</option>
                                                        </optgroup>

                                                    </select>

                                                    {{-- <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="67" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-my9q-container"><span class="select2-selection__rendered" id="select2-my9q-container" role="textbox" aria-readonly="true" title="Arizona">Arizona</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Shift:</label>
                                            <div class="col-lg-9">
                                                <div class="form-group" data-select2-id="207">

                                                    <select name="shift" class="form-control select-search select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true">
                                                        <optgroup label="Delivery Methods" data-select2-id="208">
                                                            <option value="Day" data-select2-id="68">Day</option>
                                                            <option value="Night" data-select2-id="209">Night</option>
                                                            <option value="Evening" data-select2-id="210">Evening</option>
                                                            <option value="Online" data-select2-id="211">Online</option>
                                                        </optgroup>

                                                    </select>

                                                    {{-- <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="67" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-my9q-container"><span class="select2-selection__rendered" id="select2-my9q-container" role="textbox" aria-readonly="true" title="Arizona">Arizona</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Extra Info:</label>
                                    <div class="col-lg-8">
                                        <textarea rows="5" name="extra" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">
                                        Create Admission <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
                                    </button>
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
