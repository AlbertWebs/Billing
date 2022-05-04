@extends('billing.master')
@section('content')
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-lg-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Reports & Analytics</span> - Reports Generator</h4>
                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">

                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <span class="breadcrumb-item active">Dashboard</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">

                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Main charts -->
            <div class="row">
                <div class="col-xl-12">

                    <!-- Traffic sources -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">Payment Traffic</h6>
                            <div class="header-elements">
                                <label class="custom-control custom-switch custom-control-right">
                                    <input type="checkbox" class="custom-control-input" checked>
                                    <span class="custom-control-label">Live update</span>
                                </label>
                            </div>
                        </div>

                        <div class="card-body py-0">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="d-flex align-items-center justify-content-center mb-2">
                                        <a href="#" class="btn bg-transparent border-teal text-teal rounded-pill border-2 btn-icon mr-3">
                                            <i class="icon-plus3"></i>
                                        </a>
                                        <div>
                                            <div class="font-weight-semibold">New Payments</div>
                                            <span class="text-muted">2,349 avg</span>
                                        </div>
                                    </div>
                                    <div class="w-75 mx-auto mb-3" id="new-visitors"></div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="d-flex align-items-center justify-content-center mb-2">
                                        <a href="#" class="btn bg-transparent border-warning text-warning rounded-pill border-2 btn-icon mr-3">
                                            <i class="icon-watch2"></i>
                                        </a>
                                        <div>
                                            <div class="font-weight-semibold">Expenses</div>
                                            <span class="text-muted">08:20 avg</span>
                                        </div>
                                    </div>
                                    <div class="w-75 mx-auto mb-3" id="new-sessions"></div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="d-flex align-items-center justify-content-center mb-2">
                                        <a href="#" class="btn bg-transparent border-indigo text-indigo rounded-pill border-2 btn-icon mr-3">
                                            <i class="icon-people"></i>
                                        </a>
                                        <div>
                                            <div class="font-weight-semibold">Total online</div>
                                            <span class="text-muted"><span class="badge badge-mark border-success mr-2"></span> 5,378 avg</span>
                                        </div>
                                    </div>
                                    <div class="w-75 mx-auto mb-3" id="total-online"></div>
                                </div>
                            </div>
                        </div>

                        <div class="chart position-relative" id="traffic-sources"></div>
                    </div>
                    <!-- /traffic sources -->

                </div>

                {{-- <div class="col-xl-5">

                    <!-- Sales stats -->
                    <div class="card">
                        <div class="card-header header-elements-sm-inline py-sm-0">
                            <h6 class="card-title py-sm-3">Sales statistics</h6>
                            <div class="header-elements">
                                <select class="form-control custom-select" id="select_date">
                                    <option value="val1">June, 29 - July, 5</option>
                                    <option value="val2">June, 22 - June 28</option>
                                    <option value="val3" selected>June, 15 - June, 21</option>
                                    <option value="val4">June, 8 - June, 14</option>
                                </select>
                            </div>
                        </div>

                        <div class="card-body py-0">
                            <div class="row text-center">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <h5 class="font-weight-semibold mb-0">5,689</h5>
                                        <span class="text-muted font-size-sm">new orders</span>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="mb-3">
                                        <h5 class="font-weight-semibold mb-0">32,568</h5>
                                        <span class="text-muted font-size-sm">this month</span>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="mb-3">
                                        <h5 class="font-weight-semibold mb-0">$23,464</h5>
                                        <span class="text-muted font-size-sm">expected profit</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chart mb-2" id="app_sales"></div>
                        <div class="chart" id="monthly-sales-stats"></div>
                    </div>
                    <!-- /sales stats -->

                </div> --}}
            </div>
            <!-- /main charts -->


            <!-- Dashboard content -->
            <div class="row">
                <div class="col-xl-8">

                    <!-- Marketing campaigns -->
                    <div class="card">
                        <div class="card-header header-elements-sm-inline">
                            <h6 class="card-title">Active Users</h6>
                            <div class="header-elements">
                                <span class="badge badge-success badge-pill">28 Students</span>
                                <div class="list-icons ml-3">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                                            <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                                            <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
                            <div class="d-flex align-items-center mb-3 mb-sm-0">
                                <div id="campaigns-donut"></div>
                                <div class="ml-3">
                                    <h5 class="font-weight-semibold mb-0">38,289 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+16.2%)</span></h5>
                                    <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">May 12, 12:30 am</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3 mb-sm-0">
                                <div id="campaign-status-pie"></div>
                                <div class="ml-3">
                                    <h5 class="font-weight-semibold mb-0">2,458 <span class="text-danger font-size-sm font-weight-normal"><i class="icon-arrow-down12"></i> (-4.9%)</span></h5>
                                    <span class="badge badge-mark border-danger mr-1"></span> <span class="text-muted">Jun 4, 4:00 am</span>
                                </div>
                            </div>

                            <div>
                                <a href="#" class="btn btn-indigo"><i class="icon-statistics mr-2"></i>Generate View report</a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Campaign</th>
                                        <th>Client</th>
                                        <th>Changes</th>
                                        <th>Budget</th>
                                        <th>Status</th>
                                        <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-active table-border-double">
                                        <td colspan="5">Today</td>
                                        <td class="text-right">
                                            <span class="progress-meter" id="today-progress" data-progress="30"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <img src="{{asset('theme/assets/global_assets/images/brands/facebook.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-body font-weight-semibold">Facebook</a>
                                                    <div class="text-muted font-size-sm">
                                                        <span class="badge badge-mark border-primary mr-1"></span>
                                                        02:00 - 03:00
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">Mintlime</span></td>
                                        <td><span class="text-success"><i class="icon-stats-growth2 mr-2"></i> 2.43%</span></td>
                                        <td><h6 class="font-weight-semibold mb-0">$5,489</h6></td>
                                        <td><span class="badge badge-primary">Active</span></td>
                                        <td class="text-center">
                                            <div class="list-icons">
                                                <div class="dropdown">
                                                    <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <img src="{{asset('theme/assets/global_assets/images/brands/youtube.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-body font-weight-semibold">Youtube videos</a>
                                                    <div class="text-muted font-size-sm">
                                                        <span class="badge badge-mark border-danger mr-1"></span>
                                                        13:00 - 14:00
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">CDsoft</span></td>
                                        <td><span class="text-success"><i class="icon-stats-growth2 mr-2"></i> 3.12%</span></td>
                                        <td><h6 class="font-weight-semibold mb-0">$2,592</h6></td>
                                        <td><span class="badge badge-danger">Closed</span></td>
                                        <td class="text-center">
                                            <div class="list-icons">
                                                <div class="dropdown">
                                                    <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <img src="{{asset('theme/assets/global_assets/images/brands/spotify.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-body font-weight-semibold">Spotify ads</a>
                                                    <div class="text-muted font-size-sm">
                                                        <span class="badge badge-mark border-secondary mr-1"></span>
                                                        10:00 - 11:00
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">Diligence</span></td>
                                        <td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> - 8.02%</span></td>
                                        <td><h6 class="font-weight-semibold mb-0">$1,268</h6></td>
                                        <td><span class="badge badge-secondary">On hold</span></td>
                                        <td class="text-center">
                                            <div class="list-icons">
                                                <div class="dropdown">
                                                    <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <img src="{{asset('theme/assets/global_assets/images/brands/twitter.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-body font-weight-semibold">Twitter ads</a>
                                                    <div class="text-muted font-size-sm">
                                                        <span class="badge badge-mark border-secondary mr-1"></span>
                                                        04:00 - 05:00
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">Deluxe</span></td>
                                        <td><span class="text-success"><i class="icon-stats-growth2 mr-2"></i> 2.78%</span></td>
                                        <td><h6 class="font-weight-semibold mb-0">$7,467</h6></td>
                                        <td><span class="badge badge-secondary">On hold</span></td>
                                        <td class="text-center">
                                            <div class="list-icons">
                                                <div class="dropdown">
                                                    <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="table-active table-border-double">
                                        <td colspan="5">Yesterday</td>
                                        <td class="text-right">
                                            <span class="progress-meter" id="yesterday-progress" data-progress="65"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <img src="{{asset('theme/assets/global_assets/images/brands/bing.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-body font-weight-semibold">Bing campaign</a>
                                                    <div class="text-muted font-size-sm">
                                                        <span class="badge badge-mark border-success mr-1"></span>
                                                        15:00 - 16:00
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">Metrics</span></td>
                                        <td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> - 5.78%</span></td>
                                        <td><h6 class="font-weight-semibold mb-0">$970</h6></td>
                                        <td><span class="badge badge-success">Pending</span></td>
                                        <td class="text-center">
                                            <div class="list-icons">
                                                <div class="dropdown">
                                                    <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <img src="{{asset('theme/assets/global_assets/images/brands/amazon.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-body font-weight-semibold">Amazon ads</a>
                                                    <div class="text-muted font-size-sm">
                                                        <span class="badge badge-mark border-danger mr-1"></span>
                                                        18:00 - 19:00
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">Blueish</span></td>
                                        <td><span class="text-success"><i class="icon-stats-growth2 mr-2"></i> 6.79%</span></td>
                                        <td><h6 class="font-weight-semibold mb-0">$1,540</h6></td>
                                        <td><span class="badge badge-primary">Active</span></td>
                                        <td class="text-center">
                                            <div class="list-icons">
                                                <div class="dropdown">
                                                    <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <img src="{{asset('theme/assets/global_assets/images/brands/dribbble.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-body font-weight-semibold">Dribbble ads</a>
                                                    <div class="text-muted font-size-sm">
                                                        <span class="badge badge-mark border-primary mr-1"></span>
                                                        20:00 - 21:00
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">Teamable</span></td>
                                        <td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> 9.83%</span></td>
                                        <td><h6 class="font-weight-semibold mb-0">$8,350</h6></td>
                                        <td><span class="badge badge-danger">Closed</span></td>
                                        <td class="text-center">
                                            <div class="list-icons">
                                                <div class="dropdown">
                                                    <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /marketing campaigns -->


                    <!-- Quick stats boxes -->
                    <div class="row">
                        <div class="col-lg-4">

                            <!-- Members online -->
                            <div class="card bg-teal text-white">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h3 class="font-weight-semibold mb-0">3,450</h3>
                                        <span class="badge badge-dark badge-pill align-self-center ml-auto">+53,6%</span>
                                    </div>

                                    <div>
                                        Members online
                                        <div class="font-size-sm opacity-75">489 avg</div>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div id="members-online"></div>
                                </div>
                            </div>
                            <!-- /members online -->

                        </div>

                        <div class="col-lg-4">

                            <!-- Current server load -->
                            <div class="card bg-pink text-white">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h3 class="font-weight-semibold mb-0">49.4%</h3>
                                        <div class="list-icons ml-auto">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        Current server load
                                        <div class="font-size-sm opacity-75">34.6% avg</div>
                                    </div>
                                </div>

                                <div id="server-load"></div>
                            </div>
                            <!-- /current server load -->

                        </div>

                        <div class="col-lg-4">

                            <!-- Today's revenue -->
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h3 class="font-weight-semibold mb-0">$18,390</h3>
                                        <div class="list-icons ml-auto">
                                            <a class="list-icons-item" data-action="reload"></a>
                                        </div>
                                    </div>

                                    <div>
                                        Today's revenue
                                        <div class="font-size-sm opacity-75">$37,578 avg</div>
                                    </div>
                                </div>

                                <div id="today-revenue"></div>
                            </div>
                            <!-- /today's revenue -->

                        </div>
                    </div>
                    <!-- /quick stats boxes -->


                    <!-- Support tickets -->
                    <div class="card">
                        <div class="card-header header-elements-sm-inline">
                            <h6 class="card-title">Support tickets</h6>
                            <div class="header-elements">
                                <a class="text-body daterange-ranges font-weight-semibold cursor-pointer dropdown-toggle">
                                    <i class="icon-calendar3 mr-2"></i>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body d-lg-flex align-items-lg-center justify-content-lg-between flex-lg-wrap">
                            <div class="d-flex align-items-center mb-3 mb-lg-0">
                                <div id="tickets-status"></div>
                                <div class="ml-3">
                                    <h5 class="font-weight-semibold mb-0">14,327 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+2.9%)</span></h5>
                                    <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">Jun 16, 10:00 am</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3 mb-lg-0">
                                <a href="#" class="btn bg-transparent border-indigo text-indigo rounded-pill border-2 btn-icon">
                                    <i class="icon-alarm-add"></i>
                                </a>
                                <div class="ml-3">
                                    <h5 class="font-weight-semibold mb-0">1,132</h5>
                                    <span class="text-muted">total tickets</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3 mb-lg-0">
                                <a href="#" class="btn bg-transparent border-indigo text-indigo rounded-pill border-2 btn-icon">
                                    <i class="icon-spinner11"></i>
                                </a>
                                <div class="ml-3">
                                    <h5 class="font-weight-semibold mb-0">06:25:00</h5>
                                    <span class="text-muted">response time</span>
                                </div>
                            </div>

                            <div>
                                <a href="#" class="btn btn-teal"><i class="icon-statistics mr-2"></i> Report</a>
                            </div>
                        </div>


                    </div>
                    <!-- /support tickets -->




                </div>

                <div class="col-xl-4">

                    <!-- Progress counters -->
                    <div class="row">
                        <div class="col-sm-6">

                            <!-- Available hours -->
                            <div class="card text-center">
                                <div class="card-body">

                                    <!-- Progress counter -->
                                    <div class="svg-center position-relative" id="hours-available-progress"></div>
                                    <!-- /progress counter -->


                                    <!-- Bars -->
                                    <div id="hours-available-bars"></div>
                                    <!-- /bars -->

                                </div>
                            </div>
                            <!-- /available hours -->

                        </div>

                        <div class="col-sm-6">

                            <!-- Productivity goal -->
                            <div class="card text-center">
                                <div class="card-body">

                                    <!-- Progress counter -->
                                    <div class="svg-center position-relative" id="goal-progress"></div>
                                    <!-- /progress counter -->

                                    <!-- Bars -->
                                    <div id="goal-bars"></div>
                                    <!-- /bars -->

                                </div>
                            </div>
                            <!-- /productivity goal -->

                        </div>
                    </div>
                    <!-- /progress counters -->


                    <!-- Daily sales -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">Daily sales stats</h6>
                            <div class="header-elements">
                                <span class="font-weight-bold text-danger ml-2">$4,378</span>
                                <div class="list-icons ml-3">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                                            <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                                            <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="chart" id="sales-heatmap"></div>
                        </div>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="w-100">Application</th>
                                        <th>Time</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#" class="btn btn-primary rounded-pill btn-icon btn-sm">
                                                        <span class="letter-icon"></span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-body font-weight-semibold letter-icon-title">Sigma application</a>
                                                    <div class="text-muted font-size-sm"><i class="icon-checkmark3 font-size-sm mr-1"></i> New order</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted font-size-sm">06:28 pm</span>
                                        </td>
                                        <td>
                                            <h6 class="font-weight-semibold mb-0">$49.90</h6>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#" class="btn btn-danger rounded-pill btn-icon btn-sm">
                                                        <span class="letter-icon"></span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-body font-weight-semibold letter-icon-title">Alpha application</a>
                                                    <div class="text-muted font-size-sm"><i class="icon-spinner11 font-size-sm mr-1"></i> Renewal</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted font-size-sm">04:52 pm</span>
                                        </td>
                                        <td>
                                            <h6 class="font-weight-semibold mb-0">$90.50</h6>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#" class="btn btn-indigo rounded-pill btn-icon btn-sm">
                                                        <span class="letter-icon"></span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-body font-weight-semibold letter-icon-title">Delta application</a>
                                                    <div class="text-muted font-size-sm"><i class="icon-lifebuoy font-size-sm mr-1"></i> Support</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted font-size-sm">01:26 pm</span>
                                        </td>
                                        <td>
                                            <h6 class="font-weight-semibold mb-0">$60.00</h6>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#" class="btn btn-success rounded-pill btn-icon btn-sm">
                                                        <span class="letter-icon"></span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-body font-weight-semibold letter-icon-title">Omega application</a>
                                                    <div class="text-muted font-size-sm"><i class="icon-lifebuoy font-size-sm mr-1"></i> Support</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted font-size-sm">11:46 am</span>
                                        </td>
                                        <td>
                                            <h6 class="font-weight-semibold mb-0">$55.00</h6>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#" class="btn btn-danger rounded-pill btn-icon btn-sm">
                                                        <span class="letter-icon"></span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-body font-weight-semibold letter-icon-title">Alpha application</a>
                                                    <div class="text-muted font-size-sm"><i class="icon-spinner11 font-size-sm mr-2"></i> Renewal</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted font-size-sm">10:29 am</span>
                                        </td>
                                        <td>
                                            <h6 class="font-weight-semibold mb-0">$90.50</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /daily sales -->





                    <!-- Daily financials -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">Daily financials</h6>
                            <div class="header-elements">
                                <label class="custom-control custom-switch custom-control-inline custom-control-right">
                                    <input type="checkbox" class="custom-control-input" id="realtime" checked>
                                    <span class="custom-control-label">Realtime</span>
                                </label>
                                <span class="badge badge-danger badge-pill">+86</span>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="chart mb-3" id="bullets"></div>

                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-transparent border-pink text-pink rounded-pill border-2 btn-icon"><i class="icon-statistics"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Stats for July, 6: <span class="font-weight-semibold">1938</span> orders, <span class="font-weight-semibold text-danger">$4220</span> revenue
                                        <div class="text-muted">2 hours ago</div>
                                    </div>

                                    <div class="ml-3 align-self-center">
                                        <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-transparent border-success text-success rounded-pill border-2 btn-icon"><i class="icon-checkmark3"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Invoices <a href="#">#4732</a> and <a href="#">#4734</a> have been paid
                                        <div class="text-muted">Dec 18, 18:36</div>
                                    </div>

                                    <div class="ml-3 align-self-center">
                                        <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-transparent border-primary text-primary rounded-pill border-2 btn-icon"><i class="icon-alignment-unalign"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Affiliate commission for June has been paid
                                        <div class="text-muted">36 minutes ago</div>
                                    </div>

                                    <div class="ml-3 align-self-center">
                                        <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                                    </div>
                                </li>




                            </ul>
                        </div>
                    </div>
                    <!-- /daily financials -->

                </div>
            </div>
            <!-- /dashboard content -->

        </div>
        <!-- /content area -->


        <!-- Footer -->

        <!-- /footer -->

    </div>
    <!-- /inner content -->

</div>
@endsection
