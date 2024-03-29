@extends('billing.master-datatables-print')
@section('content')

@if(Session::has('search'))
<style>
    .dt-buttons{
         display: none;
     }
     .header{
         padding: 10px;
         text-align: center;
     }
     .header h2{
         line-height: 0;
         margin-top:5px;
         font-weight: 900;
     }
     .header h5{
         line-height: 0.8;
         padding-top:5px;
         font-weight: 600;
     }
     .header h6{
         line-height: 0.5;
         padding-top:1px;
         font-weight: 600;
     }

    .card-body{
        display: none
    }

 @media print {
     .dataTables_filter input{
         display: none;
     }
     .dataTables_filter{
         display: none;
     }
     .cs-invoice_btn{
         display: none;
     }
     .dataTables_length{
         display: none;
     }
     .dt-buttons{
         display: none;
     }
     .datatable-footer{
         display: none;
     }
     .dt-button{
         display: none;
     }
 }
</style>
 @else
<style>
    .header{
        display: none;
    }
</style>
 @endif
	<!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">




            <!-- Content area -->
            <div class="content">
                <a href="javascript:window.print()" class="dt-button buttons-print btn btn-primary"><span><i class="icon-printer mr-2"></i> Print Report</span></a>


                <!-- Search field --><br><br><br>
                <div class="card">
                    <?php $Settings = DB::table('settings')->where('id',Auth::User()->campus)->get(); ?>
                    @foreach ($Settings as $Setting)
                      <div class="header">
                          <img width="200" src="{{url('/')}}/uploads/logo/{{$Setting->logo}}" alt="Atlas">
                          <h2>{{$Setting->name}}</h2>
                          <h5>{{$Setting->address}}</h5>
                          <h6>{{$Setting->mobile}}</h6>
                          {{-- <h6>{{$Setting->email}}</h6> --}}
                          <h6><u>{{$Title}}</u></h6>

                      </div>

                    @endforeach
                    <div class="card-body">
                        <form action="{{url('/')}}/billings/income-x-days" method="POST">
                            @csrf
                            <div class="d-sm-flex">
                                <div class="form-group-feedback form-group-feedback-left flex-grow-1 mb-3 mb-sm-0">
                                    <input type="text" name="date" class="form-control form-control-lg daterange-single" id="date_timepicker_end" placeholder="Search">
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
                                    {{-- <th>Period</th> --}}
                                    <th>Issued to</th>
                                    <th>For</th>
                                    {{-- <th>Status</th> --}}
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
                                    <td>#{{$Billing->reference}}</td>
                                    {{-- <td>{{$Month}} {{$Year}}</td> --}}
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
                                    {{-- <td>
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
                                    </td> --}}
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
                                        <h6 class="d-block"><strong><u>Total: {{$Total}}</u></strong></h6>
                                    </td>
                                </tr>

                            </tbody>
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
