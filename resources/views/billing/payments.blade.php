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
                        <a href="#" class="breadcrumb-item">Invoices</a>
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
                            <th>Issue date</th>
                            <th>Due date</th>
                            <th>Amount</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($Billings as $Billing)
                        <tr>
                            <td>#00{{$Billing->id}}</td>
                            <td>February 2015</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Rebecca Manes</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Skrill</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue">Overdue</option>
                                    <option value="hold" selected>On hold</option>
                                    <option value="pending">Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="invalid">Invalid</option>
                                    <option value="cancel">Canceled</option>
                                </select>
                            </td>
                            <td>
                                April 18, 2015
                            </td>
                            <td>
                                <span class="badge badge-success">Paid on Mar 16, 2015</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$17,890 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $4,890</span></h6>
                            </td>
                            <td class="text-center">
                                <div class="list-icons list-icons-extended">
                                    <a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
                                            <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
                                            <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        <tr>
                            <td>#0024</td>
                            <td>February 2015</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">James Alexander</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Wire transfer</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue">Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending">Pending</option>
                                    <option value="paid" selected>Paid</option>
                                    <option value="invalid">Invalid</option>
                                    <option value="cancel">Canceled</option>
                                </select>
                            </td>
                            <td>
                                April 17, 2015
                            </td>
                            <td>
                                <span class="badge badge-warning">5 days</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$2,769 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $2,839</span></h6>
                            </td>
                            <td class="text-center">
                                <div class="list-icons list-icons-extended">
                                    <a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
                                            <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
                                            <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>#0023</td>
                            <td>February 2015</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Jeremy Victorino</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Payoneer</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue">Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending">Pending</option>
                                    <option value="paid" selected>Paid</option>
                                    <option value="invalid">Invalid</option>
                                    <option value="cancel">Canceled</option>
                                </select>
                            </td>
                            <td>
                                April 17, 2015
                            </td>
                            <td>
                                <span class="badge badge-primary">27 days</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$1,500 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $1,984</span></h6>
                            </td>
                            <td class="text-center">
                                <div class="list-icons list-icons-extended">
                                    <a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
                                            <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
                                            <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
            <!-- /invoice archive -->

        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
                <span class="navbar-text">
                    &copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="https://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                </span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                    <li class="nav-item"><a href="https://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                    <li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /inner content -->

</div>
<!-- /main content -->
@endsection
