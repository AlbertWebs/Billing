@extends('billing.master-datatables')
@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Page header -->

        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            @if(Session::has('message'))
                <center><div class="alert alert-success">{{ Session::get('message') }}</div></center>
            @endif

            <!-- Basic datatable -->
            <div class="card">
                <table class="table datatable-basic">
                    <thead>
                        <tr><th>#</th>
                            <th>Info</th>
                            <th>Switch Status</th>
                            <th>Status</th>
                            <th></th>
                            <th style="min-width:140px" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Student as $item)
                        <tr>
                            <td>
                                <a href="{{url('/')}}/billings/edit-pic/{{$item->id}}">
                                    <img style="border:3px solid #000000;" src="{{url('/')}}/uploads/students/{{$item->avatar}}" class="rounded-circle" width="42" height="42" alt=""><br>
                                    {{-- <center>Edit({{$item->id}})</center> --}}
                                </a>
                            </td>
                            <td>
                                {{$item->name}}<br>
                                <small>
                                    @if($item->course_id == null)

                                    @else
                                    <?php $Course = DB::table('courses')->where('id',$item->course_id)->get(); ?>
                                    @foreach ($Course as $course)
                                    <span class="d-block font-size-sm text-muted">{{$course->title}}</span>
                                    @endforeach
                                    @endif
                                </small>
                                {{-- Mobile: <a href="tel:{{$item->mobile}}">{{$item->mobile}}</a><br>
                                Email:  <a href="mailto:{{$item->email}}">{{$item->email}}</a><br> --}}
                                {{-- Gender : {{$item->gender}} --}}
                            </td>


                            <td>
                                @if($item->status == 1)
                                <a onclick="return confirm('Would you wish to change this status to Not Graduated?')" href="{{url('/')}}/billings/switch-status/{{$item->id}}/0" class="btn btn-outline-danger"><small>Set as Graduated</small></button>
                                @else
                                <a onclick="return confirm('Would you wish to change this status Graduated?')" href="{{url('/')}}/billings/switch-status/{{$item->id}}/1" class="btn btn-outline-success">Set as Active</button>
                                @endif
                            </td>
                            @if($item->status == 1)
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            @else
                            <td>
                                <span class="badge badge-secondary">Graduated</span>
                            </td>
                            @endif
                            <td>
                                <?php $Billings = DB::table('billings')->where('student',$item->id)->get(); ?>
                                <a href="{{url('/')}}/billings/my-statements/{{$item->id}}" class="btn btn-outline-primary"> <i class="fas fa-print"></i> (<?php echo count($Billings); ?>)
                                </a>
                                {{-- <a title="Initiate Payment" href="{{url('/')}}/billings/m-pesa/{{$item->email}}" class="btn btn-outline-info">  <i class="fas fa-money-bill-wave"></i> Pay
                                </a> --}}
                                <a href="{{url('/')}}/billings/record-c2b/{{$item->email}}" class="btn btn-outline-success"> <i class="fas fa-money-bill-alt"></i> C2B
                                </a>
                                <a title="Record Payment" href="{{url('/')}}/billings/create-bill/{{$item->email}}" class="btn btn-outline-danger">  <i class="fas fa-pen-square"></i> Cash
                                </a>
                                {{-- <?php $Billings = DB::table('billings')->where('student',$item->id)->get(); ?>
                                <a href="{{url('/')}}/billings/my-statements/{{$item->id}}" class="btn btn-outline-primary"> <i class="fas fa-print"></i> Statement(<?php echo count($Billings); ?>)
                                </a>
                                <?php $BillingsPartials = DB::table('billings')->where('student',$item->id)->where('balance' ,'>', '0')->get(); ?>
                                @if($BillingsPartials->isEmpty())
                                <a title="Initiate Payment" href="{{url('/')}}/billings/m-pesa/{{$item->email}}" class="btn btn-outline-info">  <i class="fas fa-money-bill-wave"></i> Pay
                                </a>
                                <a href="{{url('/')}}/billings/record-c2b/{{$item->id}}" class="btn btn-outline-success"> <i class="fas fa-money-bill-alt"></i> C2B
                                </a>
                                <a title="Record Payment" href="{{url('/')}}/billings/create-bill/{{$item->email}}" class="btn btn-outline-danger">  <i class="fas fa-pen-square"></i> Record Cash
                                </a>
                                @else
                                <a title="Initiate Payment" href="{{url('/')}}/billings/m-pesa/{{$item->email}}" class="btn btn-outline-info">  <i class="fas fa-money-bill-wave"></i> Pay
                                </a>
                                <a href="{{url('/')}}/billings/record-c2b/{{$item->id}}" class="btn btn-outline-success"> <i class="fas fa-money-bill-alt"></i> C2B
                                </a>
                                <a title="Record Payment" href="{{url('/')}}/billings/create-bill/{{$item->email}}" class="btn btn-outline-danger">  <i class="fas fa-pen-square"></i> Record Cash
                                </a>
                                @endif --}}
                            </td>

                            <td>
                                <a title="Edit" href="{{url('/')}}/billings/student/{{$item->id}}" class="btn btn-outline-info">  <i class="fas fa-pen"></i>
                                </a>
                                <a title="Delete" onclick="return confirm('You wish to delete this user?')" href="{{url('/')}}/billings/delete-student/{{$item->id}}" class="btn btn-outline-danger">  <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /basic datatable -->







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
