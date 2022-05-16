@extends('billing.master-datatables-print')
@section('content')
	<!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">




            <!-- Content area -->
            <div class="content">

                <!-- Search field --><br><br><br>
                <div class="card">
                    <div class="card-body">
                        <form action="{{url('/')}}/billings/income-x-days-range" method="POST">
                            @csrf
                            <div class="d-sm-flex">
                                <div class="form-group-feedback form-group-feedback-left flex-grow-1 mb-3 mb-sm-0">
                                    <input type="text" name="date" class="form-control form-control-lg daterange-basic" id="date_timepicker_end" placeholder="Search">
                                    <div class="form-control-feedback form-control-feedback-lg">
                                        <i class="fas fa-search text-muted"></i>
                                    </div>
                                </div>
                                <div class="ml-sm-3">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 w-sm-auto">Get Report</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /search field -->

                @if(Session::has('search'))
                <!-- Basic initialization -->
					<div class="card">
						<table class="table datatable-button-print-basic">
							<thead>
								<tr>
                                    <th>Ref</th>
                                    <th>Period</th>
                                    <th>Issued to</th>
                                    <th>For</th>
                                    <th>Status</th>
                                    <th>Payment date</th>
                                    <th>Amount</th>
                                    <th class="text-center">

                                    </th>
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
                                    <td>{{$Billing->reference}}</td>
                                    <td>{{$Month}} {{$Year}}</td>
                                    <td>
                                        <h6 class="mb-0">
                                            <?php $Student = DB::table('students')->where('id',$Billing->student)->get(); ?>
                                            @foreach ($Student as $student)
                                            <a target="new" href="{{url('/')}}/billings/profile/{{$student->id}}">
                                                {{$student->name}}
                                            </a>
                                            @endforeach
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0">
                                            <span class="d-block">{{$Billing->description}}</span>
                                        </h6>
                                    </td>
                                    <td>
                                        @if($Billing->balance == 0)
                                           <select name="status" class="custom-select alert-success" >
                                        @else
                                           <select name="status" class="custom-select alert-info" >
                                        @endif
                                            @if($Billing->balance == 0)
                                            <option value="hold" selected>Fully Paid</option>
                                            @else
                                            <option value="overdue" selected>Partially Paid</option>
                                            @endif
                                        </select>
                                    </td>
                                    <td>
                                        {{$Month}} {{$date}}, {{$Year}} at {{$Hour}}:{{$min}}:{{$Sec}}
                                    </td>

                                    <td>
                                        <h6 class="mb-0 font-weight-bold">KES {{$Billing->amount}} </h6>
                                    </td>
                                    <td class="text-center">
                                        <h6 class="d-block">Balance: KES {{$Billing->balance}}</h6>
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
                                    <td>

                                    </td>
                                    <td>

                                    </td>

                                    <td>

                                    </td>
                                    <td class="text-center">
                                        <h6 class="d-block"><strong><u>T.Bal: {{$Balance}}</u></strong></h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>

                                    <td>

                                    </td>
                                    <td class="text-center">
                                        <h6 class="d-block"><strong><u>T.Amount: {{$Total}}</u></strong></h6>
                                    </td>
                                </tr>
                            </tbody>
                            {{-- <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>

                                    <td>

                                    </td>
                                    <td class="text-center">
                                        <h6 class="d-block">Balance: KES {{$Balance}}</h6>
                                    </td>
                                </tr>
                            </tfoot> --}}
						</table>
					</div>
					<!-- /basic initialization -->
                @else

                @endif




            </div>
            <!-- /content area -->


           @include('billing.footer')

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->
@endsection
