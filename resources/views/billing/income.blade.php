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
                            <th>Source</th>
                            <th>Reason</th>
                            <th>Balance</th>
                            <th>Amount</th>
                            <th>Admin</th>
                            <th style="min-width:140px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Income as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->source}}<br>Code:{{$item->code}}</td>
                            <td>
                                {{$item->reason}}<br>
                                <small><strong>Timestamp:{{date('Y-M-d h:s:i', strtotime($item->created_at))}}</strong></small>
                            </td>
                            <td>
                                @if($item->balance < 0)
                                <span class="text-danger"><strong>{{$item->balance}}</strong></span>
                                @else
                                <span class="text-success"><strong>{{$item->balance}}</strong></span>
                                @endif
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td></td>
                            <td>

                            </td>

                            <td>
                                @if($IncomeTotal < 0)
                                <a href="#" class="btn btn-outline-danger">
                                   <strong><strong>Total Income</strong><hr> KES {{$IncomeTotal}}</strong>
                                </a>
                                @else
                                <a href="#" class="btn btn-outline-success">
                                    <strong><strong>Total Income</strong><hr> KES {{$IncomeTotal}}</strong>
                                 </a>
                                @endif
                            </td>
                        </tr>
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
