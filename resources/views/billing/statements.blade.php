@extends('billing.master-invoice')
@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">




        <!-- Content area -->
        <div class="content">

            <!-- Invoice archive -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <h6 class="card-title">Payments By: {{$Student->name}}</h6>
                </div>
                <button type="button" class="btn btn-success btn-sm ml-3" onclick = "window.print()"><i class="icon-printer mr-2"></i><span class="fas fa-print mr-3"></span> Print</button>

                <table class="table table-lg invoice-archive">
                    <thead>
                        <tr>
                            <th>Reference</th>
                            <th>Period</th>
                            <th>Issued to </th>
                            <th>Status</th>
                            <th>Payment date  </th>
                            <th></th>
                            <th>Amount</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($Billings as $Billing)
                        <?php
                            $RawDate = $Billing->created_at;
                            $FormatDate = strtotime($RawDate);
                            $Month = date('M',$FormatDate);
                            $Date = date('D',$FormatDate);
                            $Year = date('Y',$FormatDate);
                            $date = date('d',$FormatDate);
                            $Hour = date('h',$FormatDate);
                            $min = date('i',$FormatDate);
                            $Sec = date('s',$FormatDate);
                        ?>
                        <tr>
                            <td>#{{$Billing->reference}}</td>
                            <td>{{$Month}} {{$Year}}</td>
                            <td>
                                <h6 class="mb-0">
                                    <?php $Student = DB::table('students')->where('id',$Billing->student)->get(); ?>
                                    @foreach ($Student as $student)
                                    <a target="new" href="{{url('/')}}/billings/profile/{{$student->id}}">
                                        {{$student->name}}
                                    </a>
                                    @endforeach
                                    <span class="d-block font-size-sm text-muted">{{$Billing->description}}</span>
                                </h6>
                            </td>
                            <td>
                                @if($Billing->balance == 0)
                                   <select name="status" class="custom-select alert-success" >
                                @else
                                   <select name="status" class="custom-select alert-info" >
                                @endif
                                    @if($Billing->balance == 0)
                                    <option value="overdue">Partially Paid</option>
                                    <option value="hold" selected>Fully Paid</option>
                                    @else
                                    <option value="overdue" selected>Partially Paid</option>
                                    <option value="hold">Paid</option>
                                    @endif
                                </select>
                            </td>
                            <td>
                                {{$Month}} {{$date}}, {{$Year}} at {{$Hour}}:{{$min}}:{{$Sec}}
                            </td>
                            <td>

                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">KES {{$Billing->amount}} <span class="d-block font-size-sm text-muted font-weight-normal">Balance KES {{$Billing->balance}}</span></h6>
                            </td>
                            <td class="text-center">

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /invoice archive -->

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
