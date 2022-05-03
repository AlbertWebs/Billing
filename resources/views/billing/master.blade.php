<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Designekta</title>

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
	<script src="{{asset('theme/assets/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

	<script src="{{asset('theme/assets/js/app.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/demo_pages/dashboard.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/demo_charts/pages/dashboard/light/sparklines.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/demo_charts/pages/dashboard/light/lines.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/demo_charts/pages/dashboard/light/areas.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/demo_charts/pages/dashboard/light/donuts.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/demo_charts/pages/dashboard/light/bars.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/demo_charts/pages/dashboard/light/progress.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/demo_charts/pages/dashboard/light/pies.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/demo_charts/pages/dashboard/light/bullets.js')}}"></script>
	<!-- /theme JS files -->

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
								<img src="{{asset('theme/assets/global_assets/images/demo/users/face11.jpg')}}" class="rounded-circle" alt="">
							</a>

							<div class="media-body">
								<div class="font-weight-semibold">Albert Muhatia</div>
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

</body>

</html>
