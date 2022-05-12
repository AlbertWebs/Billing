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
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Record Payment</span></h4>
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
                            @if(Session::has('partials'))
                                <form action="{{url('/')}}/billings/create-bill" method="POST" id="Enroll-Form" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    <?php
                                        $Billingz = DB::table('billings')->orderBy('id','DESC')->first();

                                            if($Billingz == null){
                                            $newOrder = 1;
                                            }else{
                                                $order = 1;
                                                $Current = $Billingz->id;
                                                $newOrder = $order+$Current;

                                            }

                                    ?>

                                    <input type="hidden" name="group_id" name="{{$Billing->reference}}">
                                    <div class="col-lg-12">
                                        <div class="form-group" data-select2-id="207">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Reference:</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="reference"  placeholder="Computer Technology" value="AEC-0{{$newOrder}}" autocomplete="student-name" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Student:</label>
                                                <div class="col-lg-10">
                                                    <div class="form-group" data-select2-id="207">
                                                        <select name="user" class="form-control select-minimum select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true" required>
                                                            <optgroup label="Students" data-select2-id="208">
                                                                <?php  $Studs = DB::table('students')->where('id',$Billing->student)->get(); ?>
                                                                @foreach ($Studs as $studs)
                                                                    <option selected value="{{$studs->id}}" data-select2-id="681"> {{$studs->name}} </option>
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
                                                    <input type="text" class="form-control" name="title" value="{{$Billing->title}}"  placeholder="Computer Technology" autocomplete="student-name" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="col-lg-12">
                                        <div class="form-group" data-select2-id="207">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Amount:</label>
                                                <div class="col-lg-10">
                                                    <input type="number" class="form-control" name="amount" value="{{$Billing->balance}}" autocomplete="student-name" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Course:</label>
                                                <div class="col-lg-10">
                                                    <div class="form-group" data-select2-id="207">
                                                        <select name="course" class="form-control select-search select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true" required>
                                                            <optgroup label="Students" data-select2-id="208">
                                                                <?php $Students = DB::table('courses')->where('id',$Billing->course_id)->get(); ?>
                                                                @foreach($Students as $Stude)
                                                                <option value="{{$Stude->id}}" data-select2-id="68{{$Stude->id}}">{{$Stude->title}} - {{$Stude->price}}</option>
                                                                @endforeach
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>

                                    </div>

                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Description</label>
                                        <div class="col-lg-10">
                                            <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea" name="description" required>{{$Billing->description}}</textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Note</label>
                                        <div class="col-lg-10">
                                            <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea" name="note" required>Thank you for choosing Atlas Educational Center</textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text-right">
                                        @if(Session::has('billing'))
                                        <a href="{{url('/')}}/billings/download/{{Session::get('billing')}}" class="btn btn-success">
                                            <span class="fas fa-print mr-3"></span> Print Receipt <i class="icon-paperplane ml-2"></i>
                                        </a>
                                        @else
                                        <button type="submit" class="btn btn-primary">
                                            <span class="fas fa-save mr-3"></span>  Save and Print <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
                                        </button>
                                        @endif
                                        <p id="Success" style="padding:10px" class="alert-success">Payment Has Been Recorded Successfully</p>
                                    </div>


                                </form>
                            @else
                                <form action="{{url('/')}}/billings/create-bill" method="POST" id="Enroll-Form" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    <?php
                                        $Billing = DB::table('billings')->orderBy('id','DESC')->first();

                                            if($Billing == null){
                                            $newOrder = 1;
                                            }else{
                                                $order = 1;
                                                $Current = $Billing->id;
                                                $newOrder = $order+$Current;

                                            }

                                    ?>
                                    <input type="hidden" name="group_id" name="">

                                    <div class="col-lg-12">
                                        <div class="form-group" data-select2-id="207">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Reference:</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="reference"  placeholder="Computer Technology" value="AEC-0{{$newOrder}}" autocomplete="student-name" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Student:</label>
                                                <div class="col-lg-10">
                                                    <div class="form-group" data-select2-id="207">
                                                        <select name="user" class="form-control select-minimum select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true" required>
                                                            <optgroup label="Students" data-select2-id="208">
                                                                @if(Session::has('user'))
                                                                <?php $u = Session::get('user'); $Studs = DB::table('students')->where('email',$u)->get(); ?>
                                                                @foreach ($Studs as $studs)
                                                                    <option selected value="{{$studs->id}}" data-select2-id="681"> {{$studs->name}} </option>
                                                                @endforeach

                                                                @endif
                                                                <?php $Students = DB::table('students')->get(); ?>
                                                                @foreach($Students as $Stude)
                                                                <option value="{{$Stude->id}}" data-select2-id="68{{$Stude->id}}">{{$Stude->name}} </option>
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
                                                    <input type="text" class="form-control" name="title"  placeholder="Computer Technology" autocomplete="student-name" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-lg-12">
                                        <div class="form-group" data-select2-id="207">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Amount:</label>
                                                <div class="col-lg-10">
                                                    <input type="number" class="form-control" name="amount"  placeholder="10000" autocomplete="student-name" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Course:</label>
                                                <div class="col-lg-10">
                                                    <div class="form-group" data-select2-id="207">
                                                        <select name="course" class="form-control select-search select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true" required>
                                                            <optgroup label="Students" data-select2-id="208">
                                                                <?php $Students = DB::table('courses')->get(); ?>
                                                                @foreach($Students as $Stude)
                                                                <option value="{{$Stude->id}}" data-select2-id="68{{$Stude->id}}">{{$Stude->title}} - {{$Stude->price}}</option>
                                                                @endforeach
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>

                                    </div>

                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Description</label>
                                        <div class="col-lg-10">
                                            <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea" name="description" required></textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Note</label>
                                        <div class="col-lg-10">
                                            <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea" name="note" required>Thank you for choosing Atlas Educational Center</textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text-right">
                                        @if(Session::has('billing'))
                                        <a href="{{url('/')}}/billings/download/{{Session::get('billing')}}" class="btn btn-success">
                                            <span class="fas fa-print mr-3"></span> Print Receipt <i class="icon-paperplane ml-2"></i>
                                        </a>
                                        @else
                                        <button type="submit" class="btn btn-primary">
                                            <span class="fas fa-save mr-3"></span>  Save and Print <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
                                        </button>
                                        @endif
                                        <p id="Success" style="padding:10px" class="alert-success">Payment Has Been Recorded Successfully</p>
                                    </div>


                                </form>
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
