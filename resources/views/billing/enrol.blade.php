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
                            <h3 class="card-title">Add New Student</h3>
                        </div>


                        <div class="card-body">
                            <form action="{{url('/')}}/billings/enroll-student" method="POST" id="Enroll-Form" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Admission Number:</label>
                                            <div class="col-lg-10">
                                                <input type="text" onblur="duplicateEmail(this)" name="SEmail" autocomplete="off" class="form-control" placeholder="ADM101">
                                                <p id="exists" style="padding:10px" class="alert-danger">The User Already Exists</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Name:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="SName" id="student-name-1265" placeholder="Full Name" autocomplete="student-name">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Mobile:</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="SMobile" autocomplete="off" value="+254 7" class="form-control" placeholder="+723014032">
                                            </div>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Email:</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="email_address" autocomplete="off" value="" class="form-control"  placeholder="username@domain.com" required>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Course:</label>
                                            <div class="col-lg-10">
                                                <div class="form-group" data-select2-id="207">
                                                    <select name="course" class="form-control select-search select2-hidden-accessible" data-fouc="" data-select2-id="66" tabindex="-1" aria-hidden="true" required>
                                                        <optgroup label="Courses" data-select2-id="208">
                                                            <?php $Courses = DB::table('courses')->where('campus' ,Auth::user()->campus)->get(); ?>
                                                            @foreach($Courses as $Stude)
                                                            <?php
                                                               $School = DB::table('schools')->where('id', $Stude->school)->get();
                                                            ?>
                                                            <option value="{{$Stude->id}}" data-select2-id="68{{$Stude->id}}">{{$Stude->title}} - {{$Stude->price}} -- @foreach ($School as $sch){{$sch->title}}@endforeach</option>
                                                            @endforeach
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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


                                </div>
                                <hr>
                                <div class="text-right">
                                    @if(Session::has('user'))
                                    <a href="{{url('/')}}/billings/create-bill/{{Session::get('user')}}" class="btn btn-primary">
                                        <span class="fas fa-print mr-3"></span> Record Payment <i class="icon-paperplane ml-2"></i>
                                    </a>
                                    {{-- <a href="{{url('/')}}/billings/m-pesa/{{Session::get('user')}}" class="btn btn-primary">
                                        <span class="fas fa-print mr-3"></span> Initiate Payment <i class="icon-paperplane ml-2"></i>
                                    </a> --}}
                                    @endif
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fas fa-save mr-3"></span> Add Student <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
                                    </button>
                                    <p id="Success" style="padding:10px" class="alert-success">Student Has Been Enrolled Successfully</p>
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
