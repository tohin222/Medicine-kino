<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from spruko.com/demo/kharna/html/Kharna_Admin-light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Dec 2018 06:39:54 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kharna-Admin Dashboard</title>

		@include('backend.partials.css')

	</head>

	<body class="bg-primary">
		<div id="app">
			<section class="section section-2">
                <div class="container">
					<div class="row">
						<div class="single-page single-pageimage construction-bg cover-image " data-image-src="{{asset('backend/assets/img/news/img14.jpg')}}">
							<div class="row">
								<div class="col-lg-6">
									<div class="wrapper wrapper2">
										<form id="login" class="card-body" tabindex="500" method="POST" action="{{ route('login') }}">
											@csrf
											<h3>Login</h3>
											<div class="mail">
												<input  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
												 @if ($errors->has('email'))
												     <span class="invalid-feedback" role="alert">
												         <strong>{{ $errors->first('email') }}</strong>
												     </span>
												 @endif
												<label>Email</label>
											</div>
											<div class="passwd">
												<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
												@if ($errors->has('password'))
														<span class="invalid-feedback" role="alert">
																<strong>{{ $errors->first('password') }}</strong>
														</span>
												@endif
												<label>Password</label>
											</div>
											<div class="submit">
												{{-- <a  class="btn btn-primary btn-block">Login</a> --}}
												<button type="submit" class="btn btn-primary">
														{{ __('Login') }}
												</button>

											</div>
											<p class="mb-2">	<a  href="{{ route('password.request') }}">
														{{ __('Forgot Your Password?') }}
												</a></p>

											<p class="text-dark mb-0">Don't have account?<a href="{{url('/register')}}" class="text-primary ml-1">Sign UP</a></p>
												<p class="mb-2"><a href="{{url('/')}}" >Return home</a></p>
										</form>

									</div>
								</div>
								<div class="col-lg-6">
									<div class="log-wrapper text-center">
										<img src="{{asset('backend/assets/img/brand/logo-white.png')}}" class="mb-2 mt-4 mt-lg-0 " alt="logo">
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure</p>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

	@include('backend.partials.js')

	</body>

<!-- Mirrored from spruko.com/demo/kharna/html/Kharna_Admin-light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Dec 2018 06:39:56 GMT -->
</html>
