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
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Site Settings</span></h4>
                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">

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
                            <form action="{{url('/')}}/billings/save-settings" method="POST" id="Enroll-Form" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="col-lg-12">
                                    <div class="form-group" data-select2-id="207">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">School Name</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="name"  placeholder="Atlas Educational Center" value="Atlas Educational Center" autocomplete="student-name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>



                                <div class="text-right">

                                    <button type="submit" class="btn btn-primary">
                                        <span class="fas fa-save mr-3"></span>  Save <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
                                    </button>
                                    <p id="Success" style="padding:10px" class="alert-success">Details Saved Successfully</p>
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
