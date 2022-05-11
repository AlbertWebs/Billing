@extends('billing.master-datatables')
@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Page header -->
        <div class="page-header page-header-light">


            <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="{{url('/')}}/billings/students" class="breadcrumb-item">Students</a>
                        <span class="breadcrumb-item active">All Students</span>

                    </div>

                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>

                </div>


            </div>
        </div>
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
                            <th>Full Name</th>
                            <th>Contacts</th>
                            <th>Switch Status</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Student as $item)
                        <tr>
                            <td><img src="{{asset('theme/assets/global_assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="32" height="32" alt=""></td>
                            <td>{{$item->name}}</td>
                            <td>Mobile: <a href="tel:{{$item->mobile}}">{{$item->mobile}}</a><br>
                                Email:  <a href="mailto:{{$item->email}}">{{$item->email}}</a>
                            </td>

                            <td>
                                @if($item->status == 1)
                                <a href="{{url('/')}}/billings/switch-status/{{$item->id}}/0" class="btn btn-outline-danger">Set Graduated</button>
                                @else
                                <a href="{{url('/')}}/billings/switch-status/{{$item->id}}/1" class="btn btn-outline-success">Set Active</button>
                                @endif
                            </td>
                            @if($item->status == 1)
                            <td><span class="badge badge-success">Active</span></td>
                            @else
                            <td><span class="badge badge-secondary">Graduated</span></td>
                            @endif
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="fas fa-th-list mr-3 fa-2x"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="fas fa-file-pdf"></i> Export to Payment Statements</a>
                                            <a href="#" class="dropdown-item"><i class="fas fa-file-pdf"></i> Export to User Details</a>
                                            <a href="{{url('/')}}/billings/student/{{$item->id}}" class="dropdown-item"><i class="fas fa-pencil-alt"></i> Edit Student</a>
                                        </div>
                                    </div>
                                </div>
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
