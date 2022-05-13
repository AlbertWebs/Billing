@extends('billing.master-datatables')
@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">
        <!-- Content area -->
        <div class="content">
            <!-- Basic datatable -->
            <div class="card">
                <table class="table datatable-basic">
                    <thead>
                        <tr><th>#</th>
                            <th>Course Title</th>
                            <th>School</th>
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
                            <td>
                                <?php $School = DB::table('schools')->where('id',$item->school)->get(); ?>
                                @foreach($School as $sc)
                                    <a target="new" style="min-width:300px" href="{{url('/')}}/billings/schools/{{$sc->id}}" class="btn btn-outline-success">  <i class="fas fa-graduation-cap mr-3"></i> {{$sc->title}}
                                    </a>
                                @endforeach
                            </td>
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
                                        <a href="{{url('/')}}/billings/course/{{$item->id}}" class="btn btn-outline-info">  <i class="fas fa-pen mr-3"></i> Edit Course
                                        </a>
                                        <a onclick="return confirm('Do you wish to delete this course?')" href="{{url('/')}}/billings/course-delete/{{$item->id}}" class="btn btn-outline-danger">  <i class="fas fa-trash mr-3"></i> Delete Course
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
