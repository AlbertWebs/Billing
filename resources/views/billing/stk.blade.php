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
                        <tr><th>#lnmoID</th>
                            <th>Transaction Code</th>
                            <th>Reason</th>
                            <th>Amount</th>
                            <th>Initiator</th>
                            <th style="min-width:140px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Expense as $item)
                        <tr>
                            <td>{{$item->lnmoID}}</td>
                            <td>
                                   <span class="btn btn-outline-danger text-success"><u>KES {{$item->MpesaReceiptNumber}}</u></span>
                            </td>
                            <td>
                                <h6 class="mb-0">
                                    <?php $Student = DB::table('students')->where('id',$item->user_id)->get(); ?>
                                    @foreach ($Student as $student)
                                    <a target="new" href="{{url('/')}}/billings/profile/{{$item->id}}">
                                        {{$student->name}}
                                    </a>
                                    @endforeach
                                </h6>
                            </td>
                            <td ><span class="btn btn-outline-info"><strong>KES {{$item->Amount}}</strong></span></td>
                            <td>
                                {{$item->PhoneNumber}}
                            </td>

                            <td>
                                @if($item->status == 1)
                                <span class="btn btn-outline-success text-success"><u>Confirmed</u></span>
                                @else
                                <span class="btn btn-outline-danger text-danger"><u>Pending</u></span>
                                @endif
                                <br>
                                <strong>{{$item->updateTime}}</strong>
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
