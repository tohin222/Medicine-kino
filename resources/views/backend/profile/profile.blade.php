@extends('backend.main')
@section('contains')

							<div class="row">
								<div class="col-lg-12 col-xl-4 col-md-12 col-sm-12">
									<div class="card">
										<div class="card-body">
											<div class="text-center">
												<div class="userprofile social">
													<div class="userpic"> <img src="{{asset('backend/assets/img/avatar/avatar-1.jpg')}}" alt="" class="userpicimg"> </div>
													<h3 class="username">{{ Auth::user()->name }}</h3>
													<p>
														@php
							                $role =  Auth::user()->role;
							                if($role==1){
							                  echo "Admin";
							                }
							                else{
							                  echo "salesman";
							                }
							              @endphp
													</p>
													<div class="text-center mb-2">
														<span><i class="fa fa-star text-warning"></i></span>
														<span><i class="fa fa-star text-warning"></i></span>
														<span><i class="fa fa-star text-warning"></i></span>
														<span><i class="fa fa-star-half-o text-warning"></i></span>
														<span><i class="fa fa-star-o text-warning"></i></span>
													</div>
													<div class="socials text-center"> <a href="#" class="btn btn-circle btn-primary ">
														<i class="fa fa-facebook"></i></a> <a href="#" class="btn btn-circle btn-danger ">
														<i class="fa fa-google-plus"></i></a> <a href="#" class="btn btn-circle btn-info ">
														<i class="fa fa-twitter"></i></a> <a href="#" class="btn btn-circle btn-warning "><i class="fa fa-envelope"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-xl-8 col-md-12 col-sm-12">
									<div class="card">
										<div class="card-body p-4">
											<div class="row d-flex">
												<div class="col-lg-6 col-md-12">
													<ul class="nav nav-pills countlist mb-0 " role="tablist">
													  <li>
															<h4>7238<br>
														  <small class="text-muted">Followers</small> </h4>
													  </li>
													  <li>
														<h4>281<br>
														  <small class="text-muted">Following</small> </h4>
													  </li>
													  <li>
														<h4>9043<br>
														  <small class="text-muted">Activity</small> </h4>
													  </li>
													</ul>
												</div>
												<div class="col-lg-6 col-md-12 follower">
													<div class="float-right d-none d-lg-block">
														<a href="#"><button class="btn btn-primary mt-1" type="submit"><i class="fe fe-users followbtn ml-1"></i>Profile Edit</button></a>
														<button class="btn btn-success mt-1"><i class="fe fe-settings followbtn ml-1"></i> Settings</button>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body border-top p-4">
											<h5 class="media-heading mt-1">About</h5>
											<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries nchanged.</p>
											<p class="mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
										</div>
									</div>
								</div>
							</div>

							<div class="row profile-card">


								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="card">
										<div class="card-header">
											<h4>Personal Details</h4>
										</div>
										<div class="card-body">
											<p><b>User ID :</b> Jessica Lee123</p>
											<p><b>Name :</b> Jessica Lee</p>
											<p><b>Emial :</b> jessicalee@gmail.com</p>
											<p><b>Phone :</b> +876 6789 234 </p>
											<p><b>Address : </b> 900 E. La Sierra St.Valrico, FL 33594 </p>
											<p class="mb-0"><b>Story : </b> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h4>Skills</h4>
										</div>
										<div class="card-body">
											<div class="tags clearfix">
												<ul class="list-unstyled">
													<li><a href="#">Wordpress</a></li>
													<li><a href="#">Development </a></li>
													<li><a href="#">Html5</a></li>
													<li><a href="#">Jquery</a></li>
													<li><a href="#">Bootstrap</a></li>
													<li><a href="#">Photoshop</a></li>
												</ul>
											</div>
										</div>
									</div>
									
								</div>
							</div>
@endsection
