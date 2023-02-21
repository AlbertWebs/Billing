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
                            <h3 class="card-title">Record Other Payments</h3>
                        </div>


                        <div class="card-body">
                            <form action="{{url('/')}}/billings/record-other-payments" method="POST" id="other-Payments" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Student:</label>
                                            <div class="col-lg-10">
                                                <div class="form-group" data-select2-id="207">
                                                    <select name="student_id" class="form-control select-minimum select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true" required>
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





                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Amount:</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="amount" autocomplete="off" value="" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                    </div>
                                    {{--  --}}


                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Description</label>
                                        <div class="col-lg-10">
                                            <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea" name="description" required></textarea>
                                        </div>
                                    </div>


                                </div>



                                <hr>


                                <hr>
                                <div class="text-right">
                                    @if(Session::has('user'))
                                    <a href="{{url('/')}}/billings/create-bill/{{Session::get('user')}}" class="btn btn-primary">
                                        <span class="fas fa-print mr-3"></span> Record Fee Payment <i class="icon-paperplane ml-2"></i>
                                    </a>
                                    {{-- <a href="{{url('/')}}/billings/m-pesa/{{Session::get('user')}}" class="btn btn-primary">
                                        <span class="fas fa-print mr-3"></span> Initiate Payment <i class="icon-paperplane ml-2"></i>
                                    </a> --}}
                                    @endif
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fas fa-save mr-3"></span> Record Payment <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
                                    </button>
                                    <p id="Success" style="padding:10px" class="alert-success">Payment Recorded Successfully</p>
                                </div>

                                <br><br>
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
