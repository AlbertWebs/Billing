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
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">{{$Billing->title}}</span> </h4>
                        <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">

                    </div>
                </div>


            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">



                <!-- Editable invoice -->
                <div class="card">
                    <div class="card-header bg-transparent header-elements-inline py-0">
                        <h6 class="card-title py-3">Editable invoice/Receipt</h6>
                        <div class="header-elements">
                            {{-- <button type="button" class="btn btn-light btn-sm"><i class="icon-file-check mr-2"></i> Save</button> --}}
                            <button type="button" class="btn btn-success btn-sm ml-3" onclick = "window.print()"><i class="icon-printer mr-2"></i><span class="fas fa-print mr-3"></span> Print</button>
                        </div>
                    </div>
                    <?php $Students = DB::table('students')->where('id',$Billing->student)->get(); ?>
                    @foreach ($Students as $user)
                    <div>
                        <div contenteditable="true">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-4">
                                            <img src="{{asset('theme/assets/global_assets/images/logo_demo.png')}}" class="mb-3 mt-2" alt="" style="width: 120px;">
                                             <ul class="list list-unstyled mb-0">
                                                <li>2269 Kimathi Lane</li>
                                                <li>Nairobi, France</li>
                                                <li>{{$user->mobile}}</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="mb-4">
                                            <div class="text-sm-right">
                                                <h4 class="text-primary mb-2 mt-lg-2">Receipt Number #{{$Billing->reference}}</h4>
                                                <ul class="list list-unstyled mb-0">
                                                    <?php
                                                        $RawDate = $Billing->created_at;
                                                        $FormatDate = strtotime($RawDate);
                                                        $Month = date('M',$FormatDate);
                                                        $Date = date('d',$FormatDate);
                                                        $Year = date('Y',$FormatDate);

                                                        $RawDates = $Billing->due;
                                                        $FormatDates = strtotime($RawDates);
                                                        $month = date('M',$FormatDates);
                                                        $date = date('d',$FormatDates);
                                                        $year = date('Y',$FormatDates);
                                                    ?>
                                                    <li>Date: <span class="font-weight-semibold">{{$Month}} {{$Date}}, {{$Year}}</span></li>
                                                    <li>Due date: <span class="font-weight-semibold">{{$month}} {{$date}}, {{$year}}</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-lg-flex flex-lg-wrap">
                                    <div class="mb-4 mb-lg-2">
                                        <span class="text-muted">Billed To:</span>
                                         <ul class="list list-unstyled mb-0">
                                            <li><h5 class="my-2">{{$user->name}}</h5></li>
                                            <li><span class="font-weight-semibold">{{$Billing->title}}</span></li>
                                            {{-- <li>3 Goodman Street</li>
                                            <li>Kabete E1 8BF</li>
                                            <li>Nairobi, Kenya</li> --}}
                                            <li>{{$user->mobile}}</li>
                                            <li><a href="#">{{$user->email}}</a></li>
                                        </ul>
                                    </div>

                                    <div class="mb-2 ml-auto">
                                        <span class="text-muted">Payment Details:</span>
                                        <div class="d-flex flex-wrap wmin-lg-400">
                                            <ul class="list list-unstyled mb-0">
                                                <li><h5 class="my-2">Amount Paid:</h5></li>
                                                <li><h5 class="my-2">Amount Due:</h5></li>
                                                {{-- <li>Bank name:</li> --}}
                                                <li>Country:</li>
                                                <li>City:</li>
                                                <li>Address:</li>

                                            </ul>

                                            <ul class="list list-unstyled text-right mb-0 ml-auto">
                                                <li><h5 class="font-weight-semibold my-2">KES {{$Billing->amount}}</h5></li>
                                                <li><h5 class="font-weight-semibold my-2">KES {{$Billing->balance}}</h5></li>
                                                {{-- <li><span class="font-weight-semibold">Profit Bank Europe</span></li> --}}

                                                <li>Kenya</li>
                                                <li>Nairobi</li>
                                                <li><span class="font-weight-semibold">Al Habibi Building, 4th Street, Eastleigh</span></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Rate</th>

                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">{{$Billing->title}}</h6>
                                                <span class="text-muted">{{$Billing->description}}</span>
                                            </td>
                                            <td>1</td>

                                            <td><span class="font-weight-semibold">KES {{$Billing->amount}}</span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="card-body">
                                <div class="d-lg-flex flex-lg-wrap">
                                    <div class="pt-2 mb-3">
                                        <h6 class="mb-3">Authorized person</h6>
                                        <div class="mb-3">
                                            <img src="{{asset('theme/assets/global_assets/images/signature.png')}}" width="150" alt="">
                                        </div>

                                        <ul class="list-unstyled text-muted">
                                            <li>Abdul Moha</li>
                                            <li>2269 4th Street</li>
                                            <li>Nairobi, Kenya</li>
                                            <li>0723014032</li>
                                        </ul>
                                    </div>

                                    <div class="pt-2 mb-3 wmin-lg-400 ml-auto">
                                        <h6 class="mb-3">Total due</h6>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>Subtotal:</th>
                                                        <td class="text-right">KES {{$Billing->amount}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Balance Due: <span class="font-weight-normal"></span></th>
                                                        <td class="text-right"><u>KES {{$Billing->balance}}</u></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total Paid:</th>
                                                        <td class="text-right text-primary"><h5 class="font-weight-semibold">KES {{$Billing->amount}}</h5></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-center">
                                <span class="text-muted text-center">{{$Billing->note}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
                <div class="text-right mt-3">
                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-left"><b><i class="icon-paperplane"></i></b> Email Receipt</button>
                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-left"><b><i class="icon-paperplane"></i></b> SMS Receipt</button>
                </div>
                <!-- /editable invoice -->
                {{-- @endforeach --}}

            </div>
            <!-- /content area -->


           @include('billing.footer')

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

@endsection
