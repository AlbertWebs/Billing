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
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Editable</span> - Templates</h4>
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
                            <button type="button" class="btn btn-light btn-sm"><i class="icon-file-check mr-2"></i> Save</button>
                            <button type="button" class="btn btn-light btn-sm ml-3" onclick = "window.print()"><i class="icon-printer mr-2"></i> Print</button>
                        </div>
                    </div>

                    <div>
                        <div contenteditable="true">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-4">
                                            <img src="../../../../global_assets/images/logo_demo.png" class="mb-3 mt-2" alt="" style="width: 120px;">
                                             <ul class="list list-unstyled mb-0">
                                                <li>2269 Kimathi Lane</li>
                                                <li>Nairobi, France</li>
                                                <li>0723014032</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="mb-4">
                                            <div class="text-sm-right">
                                                <h4 class="text-primary mb-2 mt-lg-2">Invoice #1525</h4>
                                                <ul class="list list-unstyled mb-0">
                                                    <li>Date: <span class="font-weight-semibold">May 1, 2022</span></li>
                                                    <li>Due date: <span class="font-weight-semibold">May 4, 2022</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-lg-flex flex-lg-wrap">
                                    <div class="mb-4 mb-lg-2">
                                        <span class="text-muted">Invoice To:</span>
                                         <ul class="list list-unstyled mb-0">
                                            <li><h5 class="my-2">Rebecca Namwenya</h5></li>
                                            <li><span class="font-weight-semibold">Normand axis LTD</span></li>
                                            <li>3 Goodman Street</li>
                                            <li>Kabete E1 8BF</li>
                                            <li>Nairobi, Kenya</li>
                                            <li>0723014032</li>
                                            <li><a href="#">rebecca@normandaxis.ltd</a></li>
                                        </ul>
                                    </div>

                                    <div class="mb-2 ml-auto">
                                        <span class="text-muted">Payment Details:</span>
                                        <div class="d-flex flex-wrap wmin-lg-400">
                                            <ul class="list list-unstyled mb-0">
                                                <li><h5 class="my-2">Total Due:</h5></li>
                                                <li>Bank name:</li>
                                                <li>Country:</li>
                                                <li>City:</li>
                                                <li>Address:</li>
                                                <li>IBAN:</li>
                                                <li>SWIFT code:</li>
                                            </ul>

                                            <ul class="list list-unstyled text-right mb-0 ml-auto">
                                                <li><h5 class="font-weight-semibold my-2">KES 8,750</h5></li>
                                                <li><span class="font-weight-semibold">Profit Bank Europe</span></li>
                                                <li>United Kingdom</li>
                                                <li>London E1 8BF</li>
                                                <li>3 Goodman Street</li>
                                                <li><span class="font-weight-semibold">KFH37784028476740</span></li>
                                                <li><span class="font-weight-semibold">BPT4E</span></li>
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
                                            <th>Hours</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">Mechanical Engineering</h6>
                                                <span class="text-muted">1st Semester</span>
                                            </td>
                                            <td>KES 70</td>
                                            <td>57</td>
                                            <td><span class="font-weight-semibold">KES 399000</span></td>
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
                                                        <td class="text-right">KES 399000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tax: <span class="font-weight-normal">(25%)</span></th>
                                                        <td class="text-right">$1,750</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total:</th>
                                                        <td class="text-right text-primary"><h5 class="font-weight-semibold">405125</h5></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="text-right mt-3">
                                            <button type="button" class="btn btn-primary btn-labeled btn-labeled-left"><b><i class="icon-paperplane"></i></b> Send invoice</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <span class="text-muted">Thank you for using Limitless. This invoice can be paid via PayPal, Bank transfer, Skrill or Payoneer. Payment is due within 30 days from the date of delivery. Late payment is possible, but with with a fee of 10% per month. Company registered in Kenya and Wales #6893003, registered office: 7th Floor 4rth Street, Nairobi E1 8BF, Kenya Africa. Phone number: 0723014032</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /editable invoice -->

            </div>
            <!-- /content area -->


           @include('billing.footer')

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->
@endsection
