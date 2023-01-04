
@extends('billing.master-forms')
@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Content area -->
        <div class="content">
            @foreach ($Student as $Student)
            <!-- Horizontal form options -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Basic layout-->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit {{$Student->name}}</h5>
                        </div>

                        <div class="card-body">
                            <form action="{{url('/')}}/billings/save-student-post/{{$Student->id}}" method="POST" id="Enroll-Form" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Admission Number:</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="SEmail" autocomplete="off" class="form-control" value="{{$Student->email}}"  placeholder="ADM101">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="col-lg-12">
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Name:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="SName" id="student-name-1265" value="{{$Student->name}}" placeholder="Full Name" autocomplete="student-name">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>



                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Mobile:</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="SMobile" autocomplete="off" value="{{$Student->mobile}}" class="form-control"  placeholder="+723014032">
                                            </div>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <hr>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Email:</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="email_address" autocomplete="off" value="{{$Student->email_address}}" class="form-control"  placeholder="username@domain.com">
                                            </div>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <hr>

                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Gender:</label>
                                            <div class="col-lg-8">
                                                @if($Student->gender == 'Male')
                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" value="Male" name="gender" checked>
                                                    <span class="custom-control-label">Male</span>
                                                </label>
                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" value="Female" name="gender">
                                                    <span class="custom-control-label">Female</span>
                                                </label>
                                                @else
                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" value="Male" name="gender" >
                                                    <span class="custom-control-label">Male</span>
                                                </label>
                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" value="Female" name="gender" checked>
                                                    <span class="custom-control-label">Female</span>
                                                </label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <hr>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Graduated</label>
                                    <div class="col-lg-10">
                                        <select name="status" class="form-control">
                                            @if($Student->status == "Active")
                                            <option selected="selected" value="1">Active</option>
                                            <option value="Graduated">Graduated</option>
                                            <option value="Left">Left</option>
                                            @elseif($Student->status == "Graduated")
                                            <option  value="Active">Active</option>
                                            <option selected="selected" value="Graduated">Graduated</option>
                                            <option  value="Left">Left</option>
                                            @else
                                            <option  value="Active">Active</option>
                                            <option  value="Graduated">Graduated</option>
                                            <option selected="selected"  value="Left">Left</option>
                                            @endif


                                        </select>
                                    </div>
                                </div>
                                <hr>



                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fas fa-save mr-3"></span>Save Changes <i class="icon-paperplane ml-2"></i><img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" />
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
            @endforeach

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
