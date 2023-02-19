
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
                    <hr>

                    {{-- List of Courses --}}
                    <div class="table-responsive">
                        <h6>List of Courses Taken</h6>
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="w-100">Course name</th>
                                    <th>Date Registered</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                     $Millage = DB::table('millages')->where('student_id',$Student->id)->get();
                                ?>
                                @foreach ($Millage as $Miles)
                                <?php
                                    $CourseCurrent = DB::table('courses')->where('id',$Student->course_id)->get();
                                    $Course = DB::table('courses')->where('id',$Miles->course_id)->get();
                                ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">


                                                    @if($Student->course_id == $Miles->course_id)
                                                        <div class="mr-3">
                                                            <a href="#" class="btn btn-success rounded-pill btn-icon btn-sm">
                                                                <span class="letter-icon"></span>
                                                            </a>
                                                        </div>
                                                        @else
                                                        <div class="mr-3">
                                                            <a href="#" class="btn btn-primary rounded-pill btn-icon btn-sm">
                                                                <span class="letter-icon"></span>
                                                            </a>
                                                        </div>
                                                        @endif


                                            <div>
                                                <a href="#" class="text-body font-weight-semibold letter-icon-title">
                                                    @foreach ($Course as $Courses)
                                                    {{$Courses->title}}
                                                    @endforeach
                                                </a>
                                                <div class="text-muted font-size-sm"><i class="icon-checkmark3 font-size-sm mr-1"></i>Current Active Course:
                                                 {{--  --}}

                                                @foreach ($CourseCurrent as $Current)
                                                {{$Current->title}}
                                                @endforeach
                                                 {{--  --}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted font-size-sm">{{$Miles->registred}}</span>
                                    </td>
                                    <td>
                                        <h6 class="font-weight-semibold mb-0">
                                            @if($Miles->status == "1")
                                            <span class="text-success">
                                                Done
                                            </span>
                                            @else
                                            <span class="text-warning">
                                                Ongoing
                                            </span>
                                            @endif
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class="font-weight-semibold mb-0">
                                            {{-- <a title="Switch Status Ongoing" href="http://localhost:8000/billings/switch-course/{{$Miles->id}}" class="btn btn-outline-warning">  <i class="fas fa-calendar"></i>
                                            </a> --}}
                                            @if($Miles->status == "1")
                                            <a title="Switch Status Ongoing" href="http://localhost:8000/billings/switch-course/{{$Miles->id}}" class="btn btn-outline-warning">  <i class="fas fa-check"></i>
                                            </a>
                                            @else
                                            <a title="Switch Status Complete" href="http://localhost:8000/billings/switch-course/{{$Miles->id}}" class="btn btn-outline-info">  <i class="fas fa-check"></i>
                                            </a>
                                            @endif
                                        </h6>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- List of Courses --}}
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
