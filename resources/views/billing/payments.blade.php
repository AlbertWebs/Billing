@extends('billing.master-invoice')
@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-lg-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Payments</span> - Archive</h4>
                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        {{-- <a href="#" class="btn btn-link btn-float text-body"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                        <a href="#" class="btn btn-link btn-float text-body"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                        <a href="#" class="btn btn-link btn-float text-body"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a> --}}
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        {{-- <a href="#" class="breadcrumb-item">Invoices</a> --}}
                        <span class="breadcrumb-item active">Payments</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="mailto:info@designekta.com" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="{{url('/')}}/system-settings" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


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
                            <th>Period</th>
                            <th>Issued to</th>
                            <th>Status</th>
                            <th>Payment date</th>
                            <th>Due date</th>
                            <th>Amount</th>
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
                            <td>#{{$Billing->reference}}</td>
                            <td>{{$Month}} {{$Year}}</td>
                            <td>
                                <h6 class="mb-0">
                                    <?php $Student = DB::table('students')->where('id',$Billing->student)->get(); ?>
                                    @foreach ($Student as $student)
                                    <a target="new" href="{{url('/')}}/billings/student/{{$student->id}}">
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
                                    <option value="hold" selected>Paid</option>
                                    @else
                                    <option value="overdue" selected>Partially Paid</option>
                                    <option value="hold">Paid</option>
                                    @endif


                                </select>
                            </td>
                            <td>
                                {{$Month}} {{$date}}, {{$Year}}
                            </td>
                            <td>
                                <span class="badge badge-success">Paid on {{$Month}} {{$date}}, {{$Year}}</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">KES {{$Billing->amount}} <span class="d-block font-size-sm text-muted font-weight-normal">Balance KES {{$Billing->balance}}</span></h6>
                            </td>
                            <td class="text-center">
                                <div class="list-icons list-icons-extended">
                                    {{-- <a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a> --}}
                                    <a href="{{url('/')}}/billings/download/{{$Billing->id}}" title="Download" class="list-icons-item" ><i class="fas fa-download mr-3 fa-2x"></i></a>
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cogs mr-3 fa-2x"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{url('/')}}/billings/download/{{$Billing->id}}" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
                                            <a href="{{url('/')}}/billings/download/{{$Billing->id}}" class="dropdown-item"><i class="icon-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="{{url('/')}}/billings/edit-bill/{{$Billing->id}}" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
                                            {{-- <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a> --}}
                                        </div>
                                    </div>
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
