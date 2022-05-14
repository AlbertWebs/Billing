@extends('billing.master-datatables-print')
@section('content')
	<!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">




            <!-- Content area -->
            <div class="content">

                <!-- Search field -->
                <div class="card">
                    <div class="card-body">
                        <form action="{{url('/')}}/billings/income-x-days" method="GET">
                            <div class="d-sm-flex">
                                <div class="form-group-feedback form-group-feedback-left flex-grow-1 mb-3 mb-sm-0">
                                    <input type="text" name="date" class="form-control form-control-lg daterange-single" value="" id="datese" placeholder="Search">
                                    <div class="form-control-feedback form-control-feedback-lg">
                                        <i class="fas fa-search text-muted"></i>
                                    </div>
                                </div>
                                <div class="ml-sm-3">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 w-sm-auto">Get Report</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /search field -->




            </div>
            <!-- /content area -->


           @include('billing.footer')

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->
@endsection
