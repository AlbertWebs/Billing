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
                            <h5 class="card-title">Record C2B Payment</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{url('/')}}/billings/create-bill" method="POST" id="Enroll-Form" enctype="multipart/form-data" novalidate>
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
                                        <input type="hidden" name="c2b" value="yes">

                                        <div class="col-lg-12">
                                            <div class="form-group" data-select2-id="207">
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Reference:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" readonly name="reference"  placeholder="Computer Technology" value="AEC-0{{$newOrder}}" autocomplete="student-name" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <input type="hidden" name="billType" value="1">
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
                                                    <label class="col-lg-2 col-form-label">Transaction ID:</label>
                                                    <div class="col-lg-5">
                                                        <input type="text" onblur="acheckTransaction(this)" class="form-control" name="transID" id="transID"  placeholder="P3XDAAKK4DS" autocomplete="students-name" required>
                                                        <p id="transIDResponse" style="padding:10px" class="alert-danger">The transaction has not been recieved <a class="btn btn-outline-primary" href=""> <i class="fas fa-recycle"></i> Refresh </a></p>
                                                        <small id="transSuccess" style="padding:5px" class="alert-success transSuccess">Transaction Has Been Received</small>
                                                        <input type="text" class="form-control transSuccess" name="amount"  autocomplete="students-name" required>
                                                    </div>

                                                    <div class="col-lg-5">
                                                        
                                                        <p id="transIDResponses" class="alert-info">
                                                            <button type="button" onclick="checkc2b(this)" class="btn btn-outline-primary" href=""> <i class="fas fa-recycle"></i> Check Transaction </button>
                                                        </p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                               
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group" data-select2-id="207">
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label">Amount:</label>
                                                        <div class="col-lg-10">
                                                            <input id="fetchAmount" type="text" class="form-control" name="amount"  autocomplete="students-name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-6">
                                                <div class="form-group" data-select2-id="207">
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label">Discount?:</label>
                                                        <div class="col-lg-10">
                                                            <input type="checkbox" name="discount" class="form-control">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Course:</label>
                                                    <div class="col-lg-10">
                                                        <div class="form-group" data-select2-id="207">
                                                            <select name="course" class="form-control select-search select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true" required>
                                                                <optgroup label="Courses" data-select2-id="208">
                                                                    {{--  --}}
                                                                    @if(Session::has('user'))
                                                                    <?php $u = Session::get('user'); $Studs = DB::table('students')->where('email',$u)->get(); ?>
                                                                    @foreach ($Studs as $studs)
                                                                        <?php $collection = DB::table('courses')->where('id',$studs->course_id)->get(); ?>
                                                                        @foreach ($collection as $item)
                                                                          <option selected value="{{$item->id}}" data-select2-id="681"> {{$item->title}} </option>
                                                                        @endforeach
                                                                    @endforeach

                                                                    @endif
                                                                    {{--  --}}
                                                                    <?php $Students = DB::table('courses')->where('campus', Auth::User()->campus)->get(); ?>
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
                                        <span class="fas fa-save mr-3"></span>  Save C2B <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
                                    </button>
                                    @endif
                                    <p id="Success" style="padding:10px" class="alert-success">C2B Payment Has Been Recorded Successfully</p>
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
