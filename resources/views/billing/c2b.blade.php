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
                            <th>Name</th>
                            <th>Transaction Code</th>
                            <th>Amount</th>
                            <th>Paybill</th>
                            <th style="min-width:140px">MSISDN</th>
                            <th style="min-width:140px">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Expense as $item)
                        <tr>
                            <td>{{$item->transLoID}}</td>
                            <td>

                                   <span class="btn btn-outline-success text-success"><u>{{$item->FirstName}} {{$item->MiddleName}} {{$item->LastName}}</u></span>

                            </td>
                            <td>
                                <a href="#" class="btn btn-outline-success">{{$item->TransID}}</a>
                            </td>
                            <td ><span class="btn btn-outline-info"><strong>KES {{$item->TransAmount}}</strong></span></td>
                            <td>
                                {{$item->BusinessShortCode}}
                            </td>
                            <td>
                                {{$item->MSISDN}}
                            </td>
                            <td>
                                @if($item->status == 1)
                                <span class="btn btn-outline-success text-success"><u>Confirmed</u></span>
                                @else
                                <span class="btn btn-outline-danger text-danger"><u>Pending</u></span>
                                @endif
                                <br>
                                <strong>{{$item->created_at}}</strong>
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
