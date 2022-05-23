@extends('billing.master-mpesa-stk')
@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-lg-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">M-PESA Payment</span></h4>
                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="{{url('/')}}/billings/students" class="btn btn-link btn-float text-body"><i class="icon-bars-alt text-primary"></i><span>m-pesa payments</span></a>

                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="{{url('/')}}/billings/students" class="breadcrumb-item">Billings</a>
                        <span class="breadcrumb-item active">m-pesa payments</span>
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
                            <form action="{{url('/')}}/api/v1/stk/push" method="POST" id="Enroll-Form" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Mobile:</label>
                                            <div class="col-lg-9">
                                                @if(Session::has('user'))
                                                <?php $Student = DB::table('students')->where('email',Session::get('user'))->get(); ?>
                                                @foreach ($Student as $Stu)
                                                <input type="text" name="mobile" autocomplete="off" value="{{$Stu->mobile}}" class="form-control" placeholder="+723014032">
                                                <input type="hidden" name="user_id"  value="{{$Stu->id}}">
                                                @endforeach
                                                @else
                                                <input type="text" name="mobile" autocomplete="off" value="2547" class="form-control" placeholder="+723014032">
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <?php $Billings = DB::table('billings')->where('student',$Stu->id)->where('course_id',$Stu->course_id)->orderBy('id','DESC')->first(); ?>
                                    @if($Billings == null)
                                        <div class="col-lg-12">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Amount:</label>
                                                <div class="col-lg-9">
                                                    <input type="number" value="" name="amount" autocomplete="off" value="+254 7" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                       <?php $Balance = $Billings->balance; ?>
                                        @if($Balance<1)

                                        @else
                                            <div class="col-lg-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Amount:</label>
                                                    <div class="col-lg-9">
                                                        <input type="number" value="{{$Balance}}" name="amount" autocomplete="off" value="+254 7" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                    {{--  --}}

                                </div>

                                <hr>


                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">
                                        Initiate Bill Payment <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
                                    </button>
                                    <p id="Success" style="padding:10px" class="alert-success">Check Your Phone....</p>
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
