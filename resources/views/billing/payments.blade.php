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
                        <tr>
                            <td>#0025</td>
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

                        <tr>
                            <td>#0022</td>
                            <td>January 2015</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Margo Baker</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue">Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending">Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="invalid">Invalid</option>
                                    <option value="cancel" selected>Canceled</option>
                                </select>
                            </td>
                            <td>
                                January 15, 2015
                            </td>
                            <td>
                                <span class="badge badge-primary">12 days</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$4,580 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $992</span></h6>
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
                            <td>#0021</td>
                            <td>January 2015</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Beatrix Diaz</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue" selected>Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending">Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="invalid">Invalid</option>
                                    <option value="cancel">Canceled</option>
                                </select>
                            </td>
                            <td>
                                January 10, 2015
                            </td>
                            <td>
                                <span class="badge badge-danger">- 3 days</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$7,990 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $1,294</span></h6>
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
                            <td>#0020</td>
                            <td>January 2015</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Richard Vango</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Wire transfer</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue">Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending">Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="invalid" selected>Invalid</option>
                                    <option value="cancel">Canceled</option>
                                </select>
                            </td>
                            <td>
                                January 10, 2015
                            </td>
                            <td>
                                <span class="badge badge-secondary">On hold</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$12,120 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $3,278</span></h6>
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
                            <td>#0019</td>
                            <td>January 2015</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Will Baker</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
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
                                December 26, 2014
                            </td>
                            <td>
                                <span class="badge badge-success">Paid on Feb 25, 2015</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$5,390 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $2,880</span></h6>
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
                            <td>#0018</td>
                            <td>January 2015</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Joseph Mills</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Skrill</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue">Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending" selected>Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="invalid">Invalid</option>
                                    <option value="cancel">Canceled</option>
                                </select>
                            </td>
                            <td>
                                June 17, 2015
                            </td>
                            <td>
                                <span class="badge badge-secondary">On hold</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$10,280 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $2,190</span></h6>
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
                            <td>#0017</td>
                            <td>December 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Buzz Brenson</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Wire transfer</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue">Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending" selected>Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="invalid">Invalid</option>
                                    <option value="cancel">Canceled</option>
                                </select>
                            </td>
                            <td>
                                May 6, 2015
                            </td>
                            <td>
                                <span class="badge badge-warning">2 days</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$43,320 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $1,299</span></h6>
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
                            <td>#0016</td>
                            <td>December 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Zachary Willson</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue" selected>Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending">Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="invalid">Invalid</option>
                                    <option value="cancel">Canceled</option>
                                </select>
                            </td>
                            <td>
                                March 7, 2015
                            </td>
                            <td>
                                <span class="badge badge-primary">15 days</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$7,100 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $1,450</span></h6>
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
                            <td>#0015</td>
                            <td>December 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Bastian Miller</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Payoneer</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue">Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending">Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="invalid" selected>Invalid</option>
                                    <option value="cancel">Canceled</option>
                                </select>
                            </td>
                            <td>
                                March 23, 2015
                            </td>
                            <td>
                                <span class="badge badge-warning">6 days</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$1,030 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $229</span></h6>
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
                            <td>#0014</td>
                            <td>December 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">William Samuel</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue">Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending">Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="invalid">Invalid</option>
                                    <option value="cancel" selected>Canceled</option>
                                </select>
                            </td>
                            <td>
                                March 2, 2015
                            </td>
                            <td>
                                <span class="badge badge-secondary">On hold</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$800 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $189</span></h6>
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
                            <td>#0013</td>
                            <td>November 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Monica Smith</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Wire transfer</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue">Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending" selected>Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="invalid">Invalid</option>
                                    <option value="cancel">Canceled</option>
                                </select>
                            </td>
                            <td>
                                February 25, 2015
                            </td>
                            <td>
                                <span class="badge badge-success">Paid on Feb 15, 2015</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$6,300 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $1,200</span></h6>
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
                            <td>#0012</td>
                            <td>November 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Jordana Miles</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
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
                                February 26, 2015
                            </td>
                            <td>
                                <span class="badge badge-primary">12 days</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$2,200 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $689</span></h6>
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
                            <td>#0011</td>
                            <td>November 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">John Craving</a>
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
                                May 9, 2015
                            </td>
                            <td>
                                <span class="badge badge-success">Paid on Jan 28, 2015</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$2,600 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $370</span></h6>
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
                            <td>#0010</td>
                            <td>November 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">James Basel</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Wire transfer</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue" selected>Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending">Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="invalid">Invalid</option>
                                    <option value="cancel">Canceled</option>
                                </select>
                            </td>
                            <td>
                                June 1, 2015
                            </td>
                            <td>
                                <span class="badge badge-warning">5 days</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$6,800 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $2,118</span></h6>
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
                            <td>#0009</td>
                            <td>November 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Lucy Johnson</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
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
                                April 10, 2015
                            </td>
                            <td>
                                <span class="badge badge-success">Paid on Jan 17, 2015</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$900 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $199</span></h6>
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
                            <td>#0008</td>
                            <td>October 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Kinga Wallace</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Skrill</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue">Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending" selected>Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="invalid">Invalid</option>
                                    <option value="cancel">Canceled</option>
                                </select>
                            </td>
                            <td>
                                April 12, 2015
                            </td>
                            <td>
                                <span class="badge badge-primary">12 days</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$1,200 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $298</span></h6>
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
                            <td>#0007</td>
                            <td>October 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Anna Zuniga</a>
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
                                March 29, 2015
                            </td>
                            <td>
                                <span class="badge badge-success">Paid on Jan 14, 2015</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$13,000 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $4,290</span></h6>
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
                            <td>#0006</td>
                            <td>October 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Nicolette Grey</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue">Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending" selected>Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="invalid">Invalid</option>
                                    <option value="cancel">Canceled</option>
                                </select>
                            </td>
                            <td>
                                February 23, 2015
                            </td>
                            <td>
                                <span class="badge badge-secondary">On hold</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$5,200 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $1,300</span></h6>
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
                            <td>#0005</td>
                            <td>October 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Vanessa Aurelius</a>
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
                                January 10, 2015
                            </td>
                            <td>
                                <span class="badge badge-warning">9 days</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$3,000 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $789</span></h6>
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
                            <td>#0004</td>
                            <td>October 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Hanna Walden</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
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
                                May 2, 2015
                            </td>
                            <td>
                                <span class="badge badge-primary">20 days</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$2,830 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $600</span></h6>
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
                            <td>#0003</td>
                            <td>September 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Dori Laperriere</a>
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
                                May 1, 2015
                            </td>
                            <td>
                                <span class="badge badge-success">Paid on Jan 10, 2015</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$12,850 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $3,590</span></h6>
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
                            <td>#0002</td>
                            <td>September 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Jordano Diressimo</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
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
                                June 22, 2015
                            </td>
                            <td>
                                <span class="badge badge-success">Paid on Jan 9, 2015</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$10,900 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $3,690</span></h6>
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
                            <td>#0001</td>
                            <td>September 2014</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">Patrick Muller</a>
                                    <span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
                                </h6>
                            </td>
                            <td>
                                <select name="status" class="custom-select">
                                    <option value="overdue" selected>Overdue</option>
                                    <option value="hold">On hold</option>
                                    <option value="pending">Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="invalid">Invalid</option>
                                    <option value="cancel">Canceled</option>
                                </select>
                            </td>
                            <td>
                                April 4, 2015
                            </td>
                            <td>
                                <span class="badge badge-warning">5 days</span>
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">$9,390 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $2,548</span></h6>
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
