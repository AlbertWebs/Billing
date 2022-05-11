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
                        <a href="{{url('/')}}/billings/courses" class="breadcrumb-item">Courses</a>
                        <span class="breadcrumb-item active">All Courses</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                </div>


            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Basic datatable -->
            <div class="card">




                <table class="table datatable-basic">
                    <thead>
                        <tr><th>#</th>
                            <th>Course Title</th>
                            <th>Price</th>
                            {{-- <th>Tutor</th> --}}

                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Courses as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->price}}</td>
                            {{-- <td>
                                <?php
                                   $Tutor = DB::table('tutors')->where('id',$item->tutor)->get();
                                ?>
                                @foreach ($Tutor as $tutor)
                                  {{$tutor->name}}
                                @endforeach
                            </td> --}}

                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="{{url('/')}}/billings/course/{{$item->id}}" class="list-icons-item" >
                                            <i class="fas fa-pen mr-3"></i>
                                        </a>
                                        <a href="{{url('/')}}/billings/course-delete/{{$item->id}}" class="list-icons-item" >
                                            <i class="fas fa-trash mr-3"></i>
                                        </a>


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
