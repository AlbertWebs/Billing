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

                            <th>Reason</th>
                            <th>Log by</th>
                            <th style="min-width:240px">Date</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Activity as $item)
                        <tr>
                            <td>{{$item->id}}</td>

                            <td>
                                <a href="#" class="btn btn-outline-danger">{{$item->description}}</a>
                            </td>
                            <td ><span class="btn btn-outline-info"><strong>  <?php $UserAgent = \App\Models\User::find($item->causer_id); echo $UserAgent->name ?></strong></span></td>
                            <td>{{date('Y-m-d h:i:s', strtotime($item->created_at))}}</td>
                            <td></td>
                            <td></td>
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
