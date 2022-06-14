@extends('billing.master-datatables')
@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Page header -->

        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            @if(Session::has('message'))
                <center><div class="alert alert-success">{{ Session::get('message') }}</div></center>
            @endif

            <!-- Basic datatable -->
            <div class="card">
                <table class="table datatable-basic">
                    <thead>
                        <tr><th>#</th>
                            <th>Info</th>
                            <th>Switch Status</th>
                            <th>Status</th>
                            <th></th>
                            <th style="min-width:140px" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($User as $item)
                        <tr>
                            <td>
                                <a href="{{url('/')}}/billings/edit-pic-user/{{$item->id}}">
                                    <img src="{{url('/')}}/uploads/students/{{$item->avatar}}" class="rounded-circle" width="42" height="42" alt=""><br>
                                    <center>Edit({{$item->id}})</center>
                                </a>
                            </td>
                            <td>
                                {{$item->name}}<br>

                                Email:  <a href="mailto:{{$item->email}}">{{$item->email}}</a><br>
                            </td>


                            <td>
                                @if(Auth::user()->role == "Supper User")
                                    @if(Auth::user()->role == "Supper User")
                                    <strong><a onclick="return confirm('Would you wish to switch user to Lower Admin')" href="{{url('/')}}/billings/switch-user/{{$item->id}}/0" class="btn btn-outline-danger">Supper Admin</a></strong>
                                    @else
                                    <a onclick="return confirm('Upgrade User To Supper Admin')" href="{{url('/')}}/billings/switch-user/{{$item->id}}/1" class="btn btn-outline-success">Admin</a>
                                    @endif
                                @else
                                    @if(Auth::user()->role == "Supper User")
                                    <strong><a onclick="return confirm('Permission Denied! Contact System Adminitrator')" href="{{url('/')}}/billings/switch-user/{{$item->id}}/0" class="btn btn-outline-danger">Supper Admin</a></strong>
                                    @else
                                    <a onclick="return confirm('Permission Denied! Contact System Adminitrator')" href="{{url('/')}}/billings/switch-user/{{$item->id}}/1" class="btn btn-outline-success">Admin</a>
                                    @endif
                                @endif
                            </td>
                            @if(Auth::user()->role == "Supper User")
                            <td>
                                <span class="badge badge-success">Supper Admin</span>
                            </td>
                            @else
                            <td>
                                <span class="badge badge-secondary">Admin</span>
                            </td>
                            @endif
                            <td>

                            </td>

                            <td>
                                @if(Auth::user()->is_admin == 1)
                                    <a title="Edit" href="{{url('/')}}/billings/user/{{$item->id}}" class="btn btn-outline-info">  <i class="fas fa-pen"></i>
                                    </a>
                                    <a title="Delete" onclick="return confirm('You wish to delete this user?')" href="{{url('/')}}/billings/delete-user/{{$item->id}}" class="btn btn-outline-danger">  <i class="fas fa-trash"></i>
                                    </a>
                                @else
                                    <a title="Edit" onclick="return confirm('You cannot Edit this user')" href="#" class="btn btn-outline-info">  <i class="fas fa-pen"></i>
                                    </a>
                                    <a title="Delete" onclick="return confirm('You cannot delete this user')" href="#" class="btn btn-outline-danger">  <i class="fas fa-trash"></i>
                                    </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /basic datatable -->







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
