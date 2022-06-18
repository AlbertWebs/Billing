<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Atlas Educational Center - Billing System</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('theme/assets/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('theme/assets/global_assets/css/icons/fontawesome/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('theme/assets/css/all.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('theme/assets/global_assets/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('theme/assets/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('theme/assets/js/app.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body class="bg-secondary">

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}

					<!-- Login card -->
					<form class="login-form" method="POST" action="{{ route('login') }}" id="Login-Form">
                        @csrf
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<i class="text-warning border-warning border-3 rounded-pill p-3 mb-3 mt-1 fa fa-user-circle mr-3 fa-2x">
                                        {{-- <img src="{{url('/')}}/uploads/logo/atlascollege.png" alt=""> --}}
                                    </i>
									<h5 class="mb-0">Login to your account</h5>
									<span class="d-block text-muted">Your credentials</span>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input name="email" type="text" class="form-control" placeholder="Username" value="{{ old('email') }}"  required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
									<div class="form-control-feedback">
										<i class="fa fa-user text-muted"></i>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
									<div class="form-control-feedback">
										<i class="fa fa-lock text-muted"></i>
									</div>
								</div>

								<div class="form-group d-flex align-items-center">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
										<span class="custom-control-label">Remember</span>
									</label>

									<a href="{{ route('password.request') }}" class="ml-auto">Forgot password?</a>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Sign in  <img id="Loading" width="50" src="{{url('/')}}/icons/Spinner-1s-2000px.gif" /></button>
								</div>



								<div class="form-group text-center text-muted content-divider">
									<span class="px-2">Don't have an account?</span>
								</div>

								<div class="form-group">
									<a href="tel:0723014032" class="btn btn-light btn-block">Contact Admin</a>
								</div>

								<span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
							</div>
						</div>
					</form>
					<!-- /login card -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
    <script>
        $( document ).ready(function() {
            $('#Loading').hide();
            $('#Success').hide();
            $('#exists').hide();
        });
        $("#Login-Form").submit(function(e) {
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
                    const audio = new Audio("{{url('/')}}/uploads/audio/mixkit-gaming-lock-2848.wav");
                    audio.play();
                    // Refresh
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                    // Success
                    // $('#Loading').hide();
                }
            });
        });
    </script>

</body>

</html>
