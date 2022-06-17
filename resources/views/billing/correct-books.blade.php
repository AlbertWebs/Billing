@extends('billing.master-expenses')
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
                            <h3 class="card-title">Correct Books</h3>
                        </div>


                        <div class="card-body">
                            <form action="{{url('/')}}/billings/correct-accounts" method="POST" id="Enroll-Form" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Current Balance</label>
                                            <div class="col-lg-10">
                                                <input readonly type="text" class="form-control" value="{{$Cash->balance}}" id="student-name-1265" placeholder="" autocomplete="student-name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Add Funds:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="add_funds" id="student-name-1265" placeholder="" autocomplete="student-name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Record Expense:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="remove_funds" id="student-name-1265" placeholder="" autocomplete="student-name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Reason for Correction:</label>
                                            <div class="col-lg-10">
                                                <textarea name="reason" rows="3" cols="3" class="form-control" placeholder="Reason" required></textarea>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                                <hr>




                                <hr>
                                <div class="text-right">
                                    <button onclick="return confirm('Are you sure you want to make this correction')" type="submit" class="btn btn-primary">
                                        <span class="fas fa-save mr-3"></span> Update Corrections <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
                                    </button>
                                    <p id="Success" style="padding:10px" class="alert-success">Correction Has Been Recorded Successfully</p>
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
