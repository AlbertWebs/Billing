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

<script src="{{asset('theme/assets/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
<script src="{{asset('theme/assets/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js')}}"></script>


<script src="{{asset('theme/assets/global_assets/js/demo_pages/uploader_bootstrap.js')}}"></script>

@if(Session::has('billing'))
<script type="text/javascript">
    (function($){
        $(window).on("beforeunload", function() {
            $.ajax({
               url:'{{url('/')}}/billings/session-destroy',
               type:'GET'
             });
            return false;
        })
    })(jQuery);
</script>
@endif
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
            $('#exists').hide();


        });
        $("#Enroll-Form").submit(function(e) {
            e.preventDefault(); // prevent actual form submit
            $('#Loading').show();
            var form = $(this);
            var url = form.attr('action'); //get submit url [replace url here if desired]
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes form input
                success: function(data){
                    console.log(data);
                    $('#Loading').hide();
                    $('#Success').show();
                    // Refresh
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                    // Success
                }
            });
        });
    </script>

    <script>
        function duplicateEmail(element){
            var email = $(element).val();
            $.ajax({
                type: "GET",
                url: '{{url('billings/checkemail')}}',
                data: {email:email},
                dataType: "json",
                success: function(res) {
                    if(res.exists){
                        $('#exists').show();
                    }else{
                        // Do nothing
                    }
                },
                error: function (jqXHR, exception) {

                }
            });
        }
    </script>

</body>

</html>
