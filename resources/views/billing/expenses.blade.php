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
                            <th>Balance</th>
                            <th>Reason</th>
                            <th>Amount</th>
                            <th>Initiator</th>
                            <th style="min-width:140px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Expense as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->balance}}</td>
                            <td>
                                {{$item->reason}}
                            </td>
                            <td>{{$item->amount}}</td>
                            <td>
                                <?php
                                   $Admin = DB::table('users')->where('id',$item->user)->get();
                                ?>
                                @foreach ($Admin as $tutor)
                                  {{$tutor->name}}
                                @endforeach
                            </td>

                            <td>
                                <a href="{{url('/')}}/billings/income/{{$item->id}}" class="btn btn-outline-info">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a onclick="return confirm('Do you wish to delete this course?')" href="{{url('/')}}/billings/income-delete/{{$item->id}}" class="btn btn-outline-danger">
                                    <i class="fas fa-trash"></i>
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
