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
                            <th>Date</th>
                            <th>Initiator</th>
                            <th style="min-width:140px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Expense as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>
                                @if($item->balance<1)
                                   <span class="btn btn-outline-danger text-danger"><u>KES {{$item->balance}}</u></span>
                                @else
                                   <span class="btn btn-outline-success alert-success"><u>KES {{$item->balance}}</u></span>
                                @endif
                            </td>
                            <td>
                                <a href="#" class="btn btn-outline-success">{{$item->reason}}</a>
                            </td>
                            <td ><span class="btn btn-outline-info"><strong>KES {{$item->amount}}</strong></span></td>
                            <td ><span class="btn btn-outline-info"><strong>{{$item->date}}</strong></span></td>
                            <td>
                                <?php
                                   $Admin = DB::table('users')->where('id',$item->user)->get();
                                ?>
                                @foreach ($Admin as $tutor)
                                  {{$tutor->name}}
                                @endforeach
                            </td>

                            <td>
                                @if(Auth::user()->is_admin == 1)
                                <a href="{{url('/')}}/billings/expenses/{{$item->id}}" class="btn btn-outline-info">
                                    <i class="fas fa-pen"></i>
                                </a>
                                @else
                                <a onclick="return confirm('Limited Access Rights')" href="#" class="btn btn-outline-info">
                                    <i class="fas fa-pen"></i>
                                </a>
                                @endif
                                @if(Auth::user()->is_admin == 1)
                                <a onclick="return confirm('Do you wish to delete this course?')" href="{{url('/')}}/billings/expenses-delete/{{$item->id}}" class="btn btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                @else
                                <a onclick="return confirm('Limited Access Rights')" href="#" class="btn btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                @endif
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
                                <a href="#" class="btn btn-outline-info">
                                   <strong><strong>Total Expenses</strong> <br> KES {{$ExpenseTotal}}</strong>
                                </a>
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
