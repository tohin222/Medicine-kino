<!DOCTYPE html>
<html lang="en">


<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Medicine Kino</title>

		@include('backend.partials.css')

	</head>

	<body  style="background-image:url('{{asset('backend/assets/img/medicine_background.jpg')}}'); background-repeat: no-repeat; background-size: cover; ">
		<div id="app">
			<section class="section section-2">
                <div class="container">
					<div class="row">
						<div class="single-page single-pageimage construction-bg cover-image " data-image-src="{{asset('backend/assets/img/news/img14.jpg')}}">
							<div class="row">
								<div class="col-lg-8">
									<div class="wrapper wrapper2">
										<form id="login" class="card-body" tabindex="500" method="POST" action="{{ route('register') }}">
											@csrf
											<h3>Register</h3>
											<div class="mail">
												<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
												@if ($errors->has('name'))
														<span class="invalid-feedback" role="alert">
																<strong>{{ $errors->first('name') }}</strong>
														</span>
												@endif
												<label>Name</label>
											</div>
											<div class="mail">
												<input  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
												@if ($errors->has('email'))
														<span class="invalid-feedback" role="alert">
																<strong>{{ $errors->first('email') }}</strong>
														</span>
												@endif
												<label>Email</label>
											</div>
											<div class="mail">
												<select class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role">
													<option value="">--Select One--</option>
													<option value="1">Admin</option>
													<option value="2">SalesMan</option>
												</select>
												@if ($errors->has('role'))
														<span class="invalid-feedback" role="alert">
																<strong>{{ $errors->first('role') }}</strong>
														</span>
												@endif
												<label>Role</label>
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
											<div class="passwd">
												<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
												@if ($errors->has('password'))
														<span class="invalid-feedback" role="alert">
																<strong>{{ $errors->first('password') }}</strong>
														</span>
												@endif
												<label>Confirm Password</label>
											</div>
											<div class="submit">
												{{-- <a class="btn btn-primary btn-block" href="index.html">Register</a> --}}
												<button type="submit" class="btn btn-primary">
														{{ __('Register') }}
												</button>
											</div>
											<p class="mb-2"><a href="{{url('/')}}" >Return home</a></p>
											<p class="text-dark mb-0">If you have already account?<a href="{{url('/login')}}" class="text-primary ml-1">Login</a></p>
										</form>

									</div>
								</div>
								<div class="col-lg-4">
									<div class="log-wrapper text-center">
										<h2 style="color:#fff">Medicine Kino</h2>
										<p style="color:#fff">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure</p>

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
