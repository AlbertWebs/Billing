<div class="navbar navbar-expand-lg navbar-dark navbar-static">
    <div class="d-flex flex-1 d-lg-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-paragraph-justify3"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-transmission"></i>
        </button>
    </div>

    <div class="navbar-brand text-center text-lg-left">
        <a href="index.html" class="d-inline-block">
            <img src="{{asset('theme/assets/global_assets/images/logo_light.png')}}" class="d-none d-sm-block" alt="">
            <img src="{{asset('theme/assets/global_assets/images/logo_icon_light.png')}}" class="d-sm-none" alt="">
        </a>
    </div>

    <div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-mobile">
        <span class="badge badge-success my-3 my-lg-0 ml-lg-3">Online</span>
    </div>

    <ul class="navbar-nav flex-row order-1 order-lg-2 flex-1 flex-lg-0 justify-content-end align-items-center">
        <li class="nav-item nav-item-dropdown-lg dropdown">
            <a href="#" class="navbar-nav-link navbar-nav-link-toggler" data-toggle="dropdown">
                <i class="icon-bubbles4"></i>
                <span class="badge badge-warning badge-pill ml-auto ml-lg-0">1</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-lg-350">
                <div class="dropdown-content-header">
                    <span class="font-weight-semibold">Messages</span>
                    <a href="#" class="text-body"><i class="icon-compose"></i></a>
                </div>

                <div class="dropdown-content-body dropdown-scrollable">
                    <ul class="media-list">
                        <li class="media">
                            <div class="mr-3 position-relative">
                                <img src="{{asset('theme/assets/global_assets/images/demo/users/face10.jpg')}}" width="36" height="36" class="rounded-circle" alt="">
                            </div>

                            <div class="media-body">
                                <div class="media-title">
                                    <a href="#">
                                        <span class="font-weight-semibold">New Payment</span>
                                        <span class="text-muted float-right font-size-sm">04:58</span>
                                    </a>
                                </div>

                                <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="dropdown-content-footer justify-content-center p-0">
                    <a href="#" class="btn btn-light btn-block border-0 rounded-top-0" data-popup="tooltip" title="Load more"><i class="icon-menu7"></i></a>
                </div>
            </div>
        </li>

        <li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
            <a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle d-inline-flex align-items-center h-100" data-toggle="dropdown">
                <img src="{{asset('theme/assets/global_assets/images/demo/users/face11.jpg')}}" class="rounded-pill mr-lg-2" height="34" alt="">
                <span class="d-none d-lg-inline-block">Albert</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{url('/')}}/billings/system-settings" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                <a href="{{url('/')}}/logout" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
            </div>
            <form id="logout-form" action="{{url('/')}}/logout" method="POST" class="d-none">
                @csrf
                {{-- <input type="hidden" name="_token" value="O4YT7SpL0Jv6Mnz2xgjl8933WE6JX9kszhcCf3AD"> --}}
            </form>
        </li>
    </ul>
</div>
