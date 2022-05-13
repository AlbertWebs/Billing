@extends('billing.master-invoice')
@section('content')
	<!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Page header -->
            <div class="page-header page-header-light mb-0">
                <div class="page-header-content header-elements-lg-inline">
                    <div class="page-title d-flex">
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">{{$User->name}}</span></h4>
                        <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                    </div>
                    @if(Session::has('message'))
                        <center><div class="alert alert-success">{{ Session::get('message') }}</div></center>
                    @endif
                    <div class="header-elements d-none">

                    </div>
                </div>


            </div>
            <!-- /page header -->


            <!-- Cover area -->
            <div class="profile-cover">
                <div class="profile-cover-img" style="background-image: url({{asset('theme/assets/global_assets/images/demo/cover2.jpg')}})"></div>
                <div class="media align-items-center text-center text-lg-left flex-column flex-lg-row m-0">
                    <div class="mr-lg-3 mb-2 mb-lg-0">
                        <a href="#" class="profile-thumb">
                            <img src="{{asset('theme/assets/global_assets/images/demo/users/face11.jpg')}}" class="border-white rounded-circle" width="48" height="48" alt="">
                        </a>
                    </div>

                    <div class="media-body text-white">
                        <h1 class="mb-0">Hanna Dorman</h1>
                        <span class="d-block">UX/UI designer</span>
                    </div>

                    <div class="ml-lg-3 mt-2 mt-lg-0">
                        <ul class="list-inline list-inline-condensed mb-0">
                            <li class="list-inline-item"><a href="#" class="btn btn-light border-transparent"><i class="icon-file-picture mr-2"></i> Cover image</a></li>
                            <li class="list-inline-item"><a href="#" class="btn btn-light border-transparent"><i class="icon-file-stats mr-2"></i> Statistics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /cover area -->


            <!-- Profile navigation -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-second">
                        <i class="icon-menu7 mr-2"></i>
                        Profile navigation
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-second">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a href="#activity" class="navbar-nav-link active" data-toggle="tab">
                                <i class="icon-menu7 mr-2"></i>
                                Activity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#schedule" class="navbar-nav-link" data-toggle="tab">
                                <i class="icon-calendar3 mr-2"></i>
                                Schedule
                                <span class="badge badge-success badge-pill position-static align-top ml-auto ml-lg-2">32</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#settings" class="navbar-nav-link" data-toggle="tab">
                                <i class="icon-cog3 mr-2"></i>
                                Settings
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a href="#" class="navbar-nav-link">
                                <i class="icon-stack-text mr-2"></i>
                                Notes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="navbar-nav-link">
                                <i class="icon-collaboration mr-2"></i>
                                Friends
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="navbar-nav-link">
                                <i class="icon-images3 mr-2"></i>
                                Photos
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear"></i>
                                <span class="d-lg-none ml-2">Settings</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-image2"></i> Update cover</a>
                                <a href="#" class="dropdown-item"><i class="icon-clippy"></i> Update info</a>
                                <a href="#" class="dropdown-item"><i class="icon-make-group"></i> Manage sections</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-three-bars"></i> Activity log</a>
                                <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Profile settings</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /profile navigation -->


            <!-- Content area -->
            <div class="content">

                <!-- Inner container -->
                <div class="d-flex align-items-stretch align-items-lg-start flex-column flex-lg-row">

                    <!-- Left content -->
                    <div class="tab-content w-100 order-2 order-lg-1">
                        <div class="tab-pane fade active show" id="activity">

                            <!-- Sales stats -->
                            <div class="card">
                                <div class="card-header header-elements-sm-inline">
                                    <h6 class="card-title">Weekly statistics</h6>
                                    <div class="header-elements">
                                        <span><i class="icon-history mr-2 text-success"></i> Updated 3 hours ago</span>

                                        <div class="list-icons ml-3">
                                            <a class="list-icons-item" data-action="reload"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="chart-container">
                                        <div class="chart has-fixed-height" id="tornado_negative_stack"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /sales stats -->


                            <!-- Blog posts -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header header-elements-sm-inline">
                                            <h6 class="card-title">Himalayan sunset</h6>
                                            <div class="header-elements">
                                                <span class="text-muted">49 minutes ago</span>
                                                <div class="list-icons ml-3">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                            <i class="icon-cog3"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Hide user posts</a>
                                                            <a href="#" class="dropdown-item"><i class="icon-user-block"></i> Block user</a>
                                                            <a href="#" class="dropdown-item"><i class="icon-user-minus"></i> Unfollow user</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="#" class="dropdown-item"><i class="icon-embed"></i> Embed post</a>
                                                            <a href="#" class="dropdown-item"><i class="icon-blocked"></i> Report this post</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="card-img-actions mb-3">
                                                <img class="card-img img-fluid" src="{{asset('theme/assets/global_assets/images/demo/cover3.jpg')}}" alt="">
                                                <div class="card-img-actions-overlay card-img">
                                                    <a href="blog_single.html" class="btn btn-outline-white border-2 btn-icon rounded-pill">
                                                        <i class="icon-link"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <h6 class="mb-3">
                                                <i class="icon-comment-discussion mr-2"></i>
                                                <a href="#">Jason Ansley</a> commented:
                                            </h6>

                                            <blockquote class="blockquote blockquote-bordered py-2 pl-3 mb-0">
                                                <p class="mb-2 font-size-base">When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.</p>
                                                <footer class="blockquote-footer">Jason, <cite title="Source Title">10:39 am</cite></footer>
                                            </blockquote>
                                        </div>

                                        <div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><a href="#" class="text-body"><i class="icon-eye4 mr-2"></i> 438</a></li>
                                                <li class="list-inline-item"><a href="#" class="text-body"><i class="icon-comment-discussion mr-2"></i> 71</a></li>
                                            </ul>

                                            <a href="#" class="btn btn-link p-0 mt-2 mt-sm-0">Read post</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header header-elements-sm-inline">
                                            <h6 class="card-title">Behind the word mountains</h6>
                                            <div class="header-elements">
                                                <span class="text-muted">59 minutes ago</span>
                                                <div class="list-icons ml-3">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                            <i class="icon-cog3"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Hide user posts</a>
                                                            <a href="#" class="dropdown-item"><i class="icon-user-block"></i> Block user</a>
                                                            <a href="#" class="dropdown-item"><i class="icon-user-minus"></i> Unfollow user</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="#" class="dropdown-item"><i class="icon-embed"></i> Embed post</a>
                                                            <a href="#" class="dropdown-item"><i class="icon-blocked"></i> Report this post</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="card-img-actions mb-3">
                                                <img class="card-img img-fluid" src="{{asset('theme/assets/global_assets/images/demo/cover.jpg')}}" alt="">
                                                <div class="card-img-actions-overlay card-img">
                                                    <a href="blog_single.html" class="btn btn-outline-white border-2 btn-icon rounded-pill">
                                                        <i class="icon-link"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <h6 class="mb-3">
                                                <i class="icon-comment-discussion mr-2"></i>
                                                <a href="#">Tim Smith</a> commented:
                                            </h6>

                                            <blockquote class="blockquote blockquote-bordered py-2 pl-3 mb-0">
                                                <p class="mb-2 font-size-base">The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                                <footer class="blockquote-footer">Mark, <cite title="Source Title">12:58 pm</cite></footer>
                                            </blockquote>
                                        </div>

                                        <div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><a href="#" class="text-body"><i class="icon-eye4 mr-2"></i> 438</a></li>
                                                <li class="list-inline-item"><a href="#" class="text-body"><i class="icon-comment-discussion mr-2"></i> 71</a></li>
                                            </ul>

                                            <a href="#" class="btn btn-link p-0 mt-2 mt-sm-0">Read post</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /blog posts -->


                            <!-- Invoices -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card border-left-3 border-left-danger rounded-left-0">
                                        <div class="card-body">
                                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                                <div>
                                                    <h6 class="font-weight-semibold">Leonardo Fellini</h6>
                                                    <ul class="list list-unstyled mb-0">
                                                        <li>Invoice #: &nbsp;0028</li>
                                                        <li>Issued on: <span class="font-weight-semibold">2015/01/25</span></li>
                                                    </ul>
                                                </div>

                                                <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                                    <h6 class="font-weight-semibold">$8,750</h6>
                                                    <ul class="list list-unstyled mb-0">
                                                        <li>Method: <span class="font-weight-semibold">SWIFT</span></li>
                                                        <li class="dropdown">
                                                            Status: &nbsp;
                                                            <a href="#" class="badge badge-danger align-top dropdown-toggle" data-toggle="dropdown">Overdue</a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item active"><i class="icon-alert"></i> Overdue</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                                            <span>
                                                <span class="badge badge-mark border-danger mr-2"></span>
                                                Due:
                                                <span class="font-weight-semibold">2015/02/25</span>
                                            </span>

                                            <ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
                                                <li class="list-inline-item">
                                                    <a href="#" class="text-body"><i class="icon-eye8"></i></a>
                                                </li>
                                                <li class="list-inline-item dropdown">
                                                    <a href="#" class="text-body dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card border-left-3 border-left-success rounded-left-0">
                                        <div class="card-body">
                                            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                                                <div>
                                                    <h6 class="font-weight-semibold">Rebecca Manes</h6>
                                                    <ul class="list list-unstyled mb-0">
                                                        <li>Invoice #: &nbsp;0027</li>
                                                        <li>Issued on: <span class="font-weight-semibold">2015/02/24</span></li>
                                                    </ul>
                                                </div>

                                                <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                                                    <h6 class="font-weight-semibold">$5,100</h6>
                                                    <ul class="list list-unstyled mb-0">
                                                        <li>Method: <span class="font-weight-semibold">Paypal</span></li>
                                                        <li class="dropdown">
                                                            Status: &nbsp;
                                                            <a href="#" class="badge badge-success align-top dropdown-toggle" data-toggle="dropdown">Paid</a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
                                                                <a href="#" class="dropdown-item active"><i class="icon-checkmark3"></i> Paid</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                                            <span>
                                                <span class="badge badge-mark border-success mr-2"></span>
                                                Due:
                                                <span class="font-weight-semibold">2015/03/24</span>
                                            </span>

                                            <ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
                                                <li class="list-inline-item">
                                                    <a href="#" class="text-body"><i class="icon-eye8"></i></a>
                                                </li>
                                                <li class="list-inline-item dropdown">
                                                    <a href="#" class="text-body dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
                                                        <a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /invoices -->


                            <!-- Video posts -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header header-elements-sm-inline">
                                            <h6 class="card-title">Peru mountains</h6>
                                            <div class="header-elements">
                                                <span class="text-muted">Today, 8:39 am</span>
                                                <div class="list-icons ml-3">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                            <i class="icon-cog3"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Hide user posts</a>
                                                            <a href="#" class="dropdown-item"><i class="icon-user-block"></i> Block user</a>
                                                            <a href="#" class="dropdown-item"><i class="icon-user-minus"></i> Unfollow user</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="#" class="dropdown-item"><i class="icon-embed"></i> Embed post</a>
                                                            <a href="#" class="dropdown-item"><i class="icon-blocked"></i> Report this post</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <p class="mb-3">Cutting much goodness more from sympathetic unwittingly under wow affluent luckily or distinctly demonstrable strewed lewd outside coaxingly and after and rational alas this fitted. Hippopotamus noticeably oh bridled more until dutiful.</p>

                                            <div class="card-img embed-responsive embed-responsive-16by9">
                                                <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126945693?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header header-elements-sm-inline">
                                            <h6 class="card-title">Woodturner master</h6>
                                            <div class="header-elements">
                                                <span class="text-muted">Yesterday, 7:52 am</span>
                                                <div class="list-icons ml-3">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                            <i class="icon-cog3"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Hide user posts</a>
                                                            <a href="#" class="dropdown-item"><i class="icon-user-block"></i> Block user</a>
                                                            <a href="#" class="dropdown-item"><i class="icon-user-minus"></i> Unfollow user</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="#" class="dropdown-item"><i class="icon-embed"></i> Embed post</a>
                                                            <a href="#" class="dropdown-item"><i class="icon-blocked"></i> Report this post</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <p class="mb-3">Bewitchingly amid heard by llama glanced fussily quetzal more that overcame eerie goodness badger woolly where since gosh accurate irrespective that pounded much winked urgent and furtive house gosh one while this more.</p>

                                            <div class="card-img embed-responsive embed-responsive-16by9">
                                                <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126545288?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /video posts -->

                        </div>

                        <div class="tab-pane fade" id="schedule">

                            <!-- Available hours -->
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title">Available hours</h6>
                                </div>

                                <div class="card-body">
                                    <div class="chart-container">
                                        <div class="chart has-fixed-height" id="available_hours"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /available hours -->


                            <!-- Schedule -->
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title">My schedule</h6>
                                </div>

                                <div class="card-body">
                                    <div class="my-schedule"></div>
                                </div>
                            </div>
                            <!-- /schedule -->

                        </div>

                        <div class="tab-pane fade" id="settings">

                            <!-- Profile info -->
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title">Profile information</h6>
                                </div>

                                <div class="card-body">
                                    <form action="#">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>Username</label>
                                                    <input type="text" value="Eugene" class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>Full name</label>
                                                    <input type="text" value="Kopyov" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>Address line 1</label>
                                                    <input type="text" value="Ring street 12" class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>Address line 2</label>
                                                    <input type="text" value="building D, flat #67" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label>City</label>
                                                    <input type="text" value="Munich" class="form-control">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>State/Province</label>
                                                    <input type="text" value="Bayern" class="form-control">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>ZIP code</label>
                                                    <input type="text" value="1031" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>Email</label>
                                                    <input type="text" readonly="readonly" value="eugene@kopyov.com" class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>Your country</label>
                                                    <select class="custom-select">
                                                        <option value="germany" selected>Germany</option>
                                                        <option value="france">France</option>
                                                        <option value="spain">Spain</option>
                                                        <option value="netherlands">Netherlands</option>
                                                        <option value="other">...</option>
                                                        <option value="uk">United Kingdom</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>Phone #</label>
                                                    <input type="text" value="+99-99-9999-9999" class="form-control">
                                                    <span class="form-text text-muted">+99-99-9999-9999</span>
                                                </div>

                                                <div class="col-lg-6">
                                                    <label>Upload profile image</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                    <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /profile info -->


                            <!-- Account settings -->
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title">Account settings</h6>
                                </div>

                                <div class="card-body">
                                    <form action="#">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>Username</label>
                                                    <input type="text" value="Kopyov" readonly="readonly" class="form-control">
                                                </div>

                                                <div class="col-lg-6">
                                                    <label>Current password</label>
                                                    <input type="password" value="password" readonly="readonly" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>New password</label>
                                                    <input type="password" placeholder="Enter new password" class="form-control">
                                                </div>

                                                <div class="col-lg-6">
                                                    <label>Repeat password</label>
                                                    <input type="password" placeholder="Repeat new password" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>Profile visibility</label>

                                                    <label class="custom-control custom-radio mb-2">
                                                        <input type="radio" name="visibility" class="custom-control-input" checked>
                                                        <span class="custom-control-label">Visible to everyone</span>
                                                    </label>

                                                    <label class="custom-control custom-radio mb-2">
                                                        <input type="radio" name="visibility" class="custom-control-input">
                                                        <span class="custom-control-label">Visible to friends only</span>
                                                    </label>

                                                    <label class="custom-control custom-radio mb-2">
                                                        <input type="radio" name="visibility" class="custom-control-input">
                                                        <span class="custom-control-label">Visible to my connections only</span>
                                                    </label>

                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="visibility" class="custom-control-input">
                                                        <span class="custom-control-label">Visible to my colleagues only</span>
                                                    </label>
                                                </div>

                                                <div class="col-lg-6">
                                                    <label>Notifications</label>

                                                    <label class="custom-control custom-checkbox mb-2">
                                                        <input type="checkbox" class="custom-control-input" checked>
                                                        <span class="custom-control-label">Password expiration notification</span>
                                                    </label>

                                                    <label class="custom-control custom-checkbox mb-2">
                                                        <input type="checkbox" class="custom-control-input" checked>
                                                        <span class="custom-control-label">New message notification</span>
                                                    </label>

                                                    <label class="custom-control custom-checkbox mb-2">
                                                        <input type="checkbox" class="custom-control-input" checked>
                                                        <span class="custom-control-label">New task notification</span>
                                                    </label>

                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label">New contact request notification</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /account settings -->

                        </div>
                    </div>
                    <!-- /left content -->


                    <!-- Right sidebar component -->
                    <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right wmin-300 border-0 shadow-none order-1 order-lg-2 sidebar-expand-lg">

                        <!-- Sidebar content -->
                        <div class="sidebar-content">

                            <!-- Navigation -->
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <span class="card-title font-weight-semibold">Navigation</span>
                                </div>

                                <ul class="nav nav-sidebar">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-user"></i>
                                             My profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-cash3"></i>
                                            Balance
                                            <span class="text-muted font-size-sm font-weight-normal ml-auto">$1,430</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-tree7"></i>
                                            Connections
                                            <span class="badge badge-danger badge-pill ml-auto">29</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-users"></i>
                                            Friends
                                        </a>
                                    </li>

                                    <li class="nav-item-divider"></li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-calendar3"></i>
                                            Events
                                            <span class="badge badge-teal badge-pill ml-auto">48</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-cog3"></i>
                                            Account settings
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /navigation -->


                            <!-- Balance changes -->
                            <div class="card">
                                <div class="card-header bg-transparent header-elements-inline">
                                    <span class="card-title font-weight-semibold">Balance changes</span>
                                    <div class="header-elements">
                                        <span><i class="icon-arrow-down22 text-danger"></i> <span class="font-weight-semibold">- 29.4%</span></span>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="chart-container">
                                        <div class="chart has-fixed-height" id="balance_statistics"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /balance changes -->


                            <!-- Latest connections -->
                            <div class="card">
                                <div class="card-header bg-transparent header-elements-inline">
                                    <span class="card-title font-weight-semibold">Latest connections</span>
                                    <div class="header-elements">
                                        <span class="badge badge-success badge-pill">+32</span>
                                    </div>
                                </div>

                                <ul class="media-list media-list-linked my-2">
                                    <li class="media text-muted border-0 py-2">Office staff</li>

                                    <li>
                                        <a href="#" class="media">
                                            <div class="mr-3">
                                                <img src="{{asset('theme/assets/global_assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="media-title font-weight-semibold">James Alexander</div>
                                                <span class="text-muted font-size-sm">UI/UX expert</span>
                                            </div>
                                            <div class="align-self-center ml-3">
                                                <span class="badge badge-mark bg-success border-success"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="media">
                                            <div class="mr-3">
                                                <img src="{{asset('theme/assets/global_assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="media-title font-weight-semibold">Jeremy Victorino</div>
                                                <span class="text-muted font-size-sm">Senior designer</span>
                                            </div>
                                            <div class="align-self-center ml-3">
                                                <span class="badge badge-mark bg-danger border-danger"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="media">
                                            <div class="mr-3">
                                                <img src="{{asset('theme/assets/global_assets/images/demo/users/face6.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="media-title"><span class="font-weight-semibold">Jordana Mills</span></div>
                                                <span class="text-muted">Sales consultant</span>
                                            </div>
                                            <div class="align-self-center ml-3">
                                                <span class="badge badge-mark bg-secondary border-secondary"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="media">
                                            <div class="mr-3">
                                                <img src="{{asset('theme/assets/global_assets/images/demo/users/face9.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="media-title"><span class="font-weight-semibold">William Miles</span></div>
                                                <span class="text-muted">SEO expert</span>
                                            </div>
                                            <div class="align-self-center ml-3">
                                                <span class="badge badge-mark bg-success border-success"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="media text-muted border-0 py-2">Partners</li>

                                    <li>
                                        <a href="#" class="media">
                                            <div class="mr-3">
                                                <img src="{{asset('theme/assets/global_assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="media-title font-weight-semibold">Margo Baker</div>
                                                <span class="text-muted font-size-sm">Google</span>
                                            </div>
                                            <div class="align-self-center ml-3">
                                                <span class="badge badge-mark bg-success border-success"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="media">
                                            <div class="mr-3">
                                                <img src="{{asset('theme/assets/global_assets/images/demo/users/face4.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="media-title font-weight-semibold">Beatrix Diaz</div>
                                                <span class="text-muted font-size-sm">Facebook</span>
                                            </div>
                                            <div class="align-self-center ml-3">
                                                <span class="badge badge-mark bg-warning border-warning"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="media">
                                            <div class="mr-3">
                                                <img src="{{asset('theme/assets/global_assets/images/demo/users/face5.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="media-title font-weight-semibold">Richard Vango</div>
                                                <span class="text-muted font-size-sm">Microsoft</span>
                                            </div>
                                            <div class="align-self-center ml-3">
                                                <span class="badge badge-mark bg-secondary border-secondary"></span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /latest connections -->

                        </div>
                        <!-- /sidebar content -->

                    </div>
                    <!-- /right sidebar component -->

                </div>
                <!-- /inner container -->

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
