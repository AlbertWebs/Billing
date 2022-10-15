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
                    <h6 class="card-title">Payments</h6>
                </div>

                <table class="table table-lg invoice-archive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center">Period</th>
                            <th class="text-center">Issued to</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Payment date</th>
                            <th class="text-center"></th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">Actions</th>
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
                        ?>
                        <tr>
                            <td class="text-center">{{$Billing->reference}}</td>
                            <td class="text-center">{{$Month}} {{$Year}}</td>
                            <td class="text-center">
                                <h6 class="mb-0">
                                    <?php $Student = DB::table('students')->where('id',$Billing->student)->get(); ?>
                                    @foreach ($Student as $student)
                                    <a target="new" href="{{url('/')}}/billings/student/{{$student->id}}">
                                        {{$student->name}}
                                    </a>
                                    @endforeach

                                    <span class="d-block font-size-sm text-muted">
                                        @if($Billing->type == 1)
                                           MPESA ID: {{$Billing->m_pesa}}
                                        @else
                                        Cash
                                        @endif
                                    </span>
                                    <span class="d-block font-size-sm text-muted">{{$Billing->description}}</span>
                                </h6>
                            </td>
                            <td class="text-center">
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
                            <td class="text-center">
                                {{$Month}} {{$date}}, {{$Year}}
                            </td>
                            <td class="text-center">

                            </td>
                            <td class="text-center">
                                <h6 class="mb-0 font-weight-bold">KES {{$Billing->amount}} <span class="d-block font-size-sm text-muted font-weight-normal">Balance KES {{$Billing->balance}}</span></h6>
                            </td>
                            <td class="text-center">
                                <div class="list-icons list-icons-extended">
                                    {{-- <a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a> --}}
                                    <a href="{{url('/')}}/billings/download/{{$Billing->id}}" title="Download" class="list-icons-item" ><i class="fas fa-download mr-3 fa-2x"></i></a>

                                </div>
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
