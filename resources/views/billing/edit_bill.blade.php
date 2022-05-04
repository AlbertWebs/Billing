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
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Edit Recorded Payment</span></h4>
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
                        <span class="breadcrumb-item active">Create Bill</span>
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
                            <form action="{{url('/')}}/billings/edit-bill/{{$Billing->id}}" method="POST" id="Enroll-Form" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Student:</label>
                                            <div class="col-lg-10">
                                                <div class="form-group" data-select2-id="207">
                                                    <select name="user" class="form-control select-search select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true">
                                                        <optgroup label="Students" data-select2-id="208">
                                                            <?php $Students = DB::table('students')->get(); ?>
                                                            @foreach($Students as $Stude)
                                                            <option value="{{$Stude->id}}" data-select2-id="68{{$Stude->id}}">{{$Stude->name}} - {{$Stude->course}}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <hr>
                                <div class="col-lg-12">
                                    <div class="form-group" data-select2-id="207">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Title:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="title"  placeholder="Computer Technology" autocomplete="student-name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Price:</label>
                                            <div class="col-lg-3">
                                                <div class="form-group" data-select2-id="207">
                                                    <select name="price" class="form-control select-search select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true">
                                                        <optgroup label="Students" data-select2-id="208">
                                                            <?php $Students = DB::table('courses')->get(); ?>
                                                            @foreach($Students as $Stude)
                                                            <option value="{{$Stude->price}}" data-select2-id="68{{$Stude->id}}">{{$Stude->title}} - {{$Stude->price}}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group" data-select2-id="207">
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label">QTY:</label>
                                                        <div class="col-lg-10">
                                                            <input type="number" class="form-control" name="qty"  value="1" autocomplete="student-name">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group" data-select2-id="207">
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label">Tax:</label>
                                                        <div class="col-lg-10">
                                                            <input type="number" class="form-control" name="tax"  value="0" autocomplete="student-name">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <hr>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Description</label>
                                    <div class="col-lg-10">
                                        <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea" name="description"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Note</label>
                                    <div class="col-lg-10">
                                        <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea" name="note">Thank you for using Limitless. This invoice can be paid via PayPal, Bank transfer, Skrill or Payoneer. Payment is due within 30 days from the date of delivery. Late payment is possible, but with with a fee of 10% per month. Company registered in Kenya and Wales #6893003, registered office: 7th Floor 4rth Street, Nairobi E1 8BF, Kenya Africa. Phone number: 0723014032</textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">
                                        Save Payment <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
                                    </button>
                                    <p id="Success" style="padding:10px" class="alert-success">Payment Has Been Recorded Successfully</p>
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
