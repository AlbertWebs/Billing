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
                            <h5 class="card-title">Record Payment</h5>
                        </div>


                        <div class="card-body">
                            @if(Session::has('partials'))
                               @include('billing.partial')
                            @else
                               @include('billing.initial')
                            @endif
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
