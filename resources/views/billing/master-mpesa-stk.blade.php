<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{$Title}} - Atlas Educational Center</title>

	<!-- Global stylesheets -->
	<link href="{{asset('theme/assets/fonts.googleapis.com/css1381.css?family=Roboto:400,300,100,500,700,900')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('theme/assets/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('theme/assets/global_assets/css/icons/fontawesome/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('theme/assets/css/all.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->



	<!-- Core JS files -->
	<script src="{{asset('theme/assets/global_assets/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<!-- /core JS files -->

    	<!-- Theme JS files -->

<!-- Theme JS files -->
<script src="{{asset('theme/assets/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>
<script src="{{asset('theme/assets/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>

<script src="{{asset('theme/assets/js/app.js')}}"></script>
<script src="{{asset('theme/assets/global_assets/js/demo_pages/form_select2.js')}}"></script>
{{-- <script src="../../../../global_assets/js/demo_pages/invoice_archive.js"></script> --}}

</head>

<body>

	<!-- Main navbar -->
    @include('billing.top')
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-section sidebar-user my-1">
					<div class="sidebar-section-body">
						<div class="media">
							<a href="#" class="mr-3">
								<img src="{{url('/')}}/uploads/users/{{Auth::user()->avatar}}" class="rounded-circle" alt="">
							</a>

							<div class="media-body">
								<div class="font-weight-semibold">{{Auth::user()->name}}</div>
								<div class="font-size-sm line-height-sm opacity-50">
									Senior developer
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
									<i class="icon-transmission"></i>
								</button>

								<button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
									<i class="icon-cross2"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
                @include('billing.sidebar')
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->

		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
        @yield('content')
		<!-- /main content -->

	</div>
	<!-- /page content -->
    {{-- Ajax --}}
    <script>
        $( document ).ready(function() {
            $('#Loading').hide();
            $('#Success').hide();

        });
        $("#Enroll-Form").submit(function(e) {
            e.preventDefault(); // prevent actual form submit
            $('#Loading').show();
            $('#Success').show();
            setTimeout(function() {
                $('#Success').html('Please wait.........');
            }, 2000);
            setTimeout(function() {
                $('#Success').html('Check Your Phone....');
            }, 2000);
            var form = $(this);
            var url = form.attr('action'); //get submit url [replace url here if desired]
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes form input
                success: function(data){
                    console.log(data);
                    $('#Loading').hide();
                    $('#Success').html('');
                    setTimeout(function() {
                        $('#Success').html('Redirecting you...');
                    }, 1000);
                    // Refresh
                    setTimeout(function() {
						window.location = "{{url('billings/verify')}}"
                    }, 5000);
                    // Success
                }
            });
        });
    </script>

</body>

</html>
