
@section('header_css')
	<!--Chartist css-->
	<link rel="stylesheet" href="{{asset('backend/assets/plugins/chartist/chartist.css')}}">
	<link rel="stylesheet" href="{{asset('backend/assets/plugins/chartist/chartist-plugin-tooltip.css')}}">

	<!--Full calendar css-->
	<link rel="stylesheet" href="{{asset('backend/assets/plugins/fullcalendar/stylesheet1.css')}}">

	<!--morris css-->
	<link rel="stylesheet" href="{{asset('backend/assets/plugins/morris/morris.css')}}">
@endsection
@extends('backend.main')
@section('contains')
	<div class="row">
		<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
			<div class="card">
				<div class="card-body text-center">
					<h5>Today Sales</h5>
					@php
					$day = 0;
					@endphp
					@foreach($order_daily as $order_daily)
						@php
						$day = $day+$order_daily->order_total;
						@endphp
					@endforeach

					<div class="text-center">
						<div class="mb-3 mt-1">
							<span class="sparkline_line" ></span>
						</div>
						<h3 class="mb-2 text-dark">{{ $day}}Taka</h3>
						<span class="text-green"><i class="fa fa-arrow-up text-success"> </i>23% increase</span></i><small> last week</small>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
			<div class="card">
				<div class="card-body text-center">
					<h5>Today Sales</h5>

					<div class="text-center">
						<div class="mb-3 mt-1">
							<span class="sparkline_pie" ></span>
						</div>
						<h3 class="mb-2 text-dark">$763</h3>
						<span class="text-green"><i class="fa fa-arrow-down text-danger"> </i>10% increase</span></i><small> last week</small>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
			<div class="card">
				<div class="card-body text-center">
					<h5>Mothly Sales</h5>
					@php
                          $month = 0;
                          @endphp
                          @foreach($order_monthly as $order_monthly)

                            @php
                            $month = $month+$order_monthly->order_total;
                            @endphp
                          @endforeach

					<div class="text-center">
						<div class="mb-3 mt-1">
							<span class="sparkline_bar" ></span>
						</div>
						<h3 class="mb-2 text-dark">{{ $month}}Taka</h3>
						<span class="text-green"><i class="fa fa-arrow-up text-success"> </i>23% increase</span></i><small> last week</small>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
			<div class="card">
				<div class="card-body text-center">
					<h5>Yearly Sales</h5>
					@php
                            $year = 0;
                            @endphp
                            @foreach($order_yearly as $order_yearly)

                            @php
                            $year = $year+$order_yearly->order_total;
                            @endphp
                          @endforeach

					<div class="text-center">
						<div class="mb-3 mt-1">
							<span class="sparkline_area" ></span>
						</div>
						<h3 class="mb-2 text-dark">{{ $year }}Taka</h3>
						<span class=""><i class="fa fa-arrow-down text-danger"> </i>3% decrease</span></i><small> last week</small>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-lg-12 col-xl-8 col-md-12 col-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h4>Project Status</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive projectstatus">
						<table class="table border ">
							<thead>
								<tr>
									<th class="p-t-10">Assigned</th>
									<th class="p-t-10">Project</th>
									<th class="p-t-10">Priority</th>
									<th class="p-t-10">Budget</th>
								</tr>
							</thead>
							<tbody>
								<tr class="border-bottom">
									<td class="">
										<div class="d-flex align-items-center">
											<img src="assets/img/avatar/avatar-1.jpg" class="rounded-circle w-32 mr-2" alt="friend">
											<div class="m-l-15">
												<p class="m-b-5">Sophia Brown</p>
												<p class="mb-0 text-muted text-small">Product Designer</p>
											</div>
										</div>
									</td>
									<td class="mt-2">Web App</td>
									<td><label class="badge badge-success">Low</label></td>
									<td> <span class="badge badge-primary badge-pill"> 27k <i class="mdi mdi-chart-line"></i>  </span></td>
								</tr>
								<tr class="border-bottom">
									<td class="p-b-10">
										<div class="d-flex align-items-center">
											<img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle w-32 mr-2" alt="friend">
											<div class="m-l-15">
												<p class="m-b-5">Rachel Newton</p>
												<p class="mb-0 text-muted text-small">Mobile Developer</p>
											</div>
										</div>
									</td>
									<td>Mobile App</td>
									<td><label class="badge badge-warning">Medium</label></td>
									<td> <span class="badge badge-info badge-pill"> 27k <i class="mdi mdi-chart-line"></i>  </span></td>
								</tr>
								<tr  class="border-bottom">
									<td class="p-b-10">
										<div class="d-flex align-items-center">
											<img src="assets/img/avatar/avatar-3.jpg" class="rounded-circle w-32 mr-2" alt="friend">
											<div class="m-l-15">
												<p class="m-b-5">Marcus Stevens</p>
												<p class="mb-0 text-muted text-small">Core Developer</p>
											</div>
										</div>
									</td>
									<td>Plugin</td>
									<td><label class="badge badge-danger">High</label></td>
									<td> <span class="badge badge-warning badge-pill"> 27k <i class="mdi mdi-chart-line"></i>  </span></td>
								</tr>
								<tr  class="border-bottom">
									<td class="p-b-10">
										<div class="d-flex align-items-center">
											<img src="assets/img/avatar/avatar-4.jpg" class="rounded-circle w-32 mr-2" alt="friend">
											<div class="m-l-15">
												<p class="m-b-5">Theresa Becker</p>
												<p class="mb-0 text-muted text-small">Product Designer</p>
											</div>
										</div>
									</td>
									<td>Web App</td>
									<td><label class="badge badge-success">Low</label></td>
									<td> <span class="badge badge-dark badge-pill"> 27k <i class="mdi mdi-chart-line"></i>  </span></td>
								</tr>
								<tr >
									<td class="p-b-10">
										<div class="d-flex align-items-center">
											<img src="assets/img/avatar/avatar-1.jpg" class="rounded-circle w-32 mr-2 " alt="friend">
											<div class="m-l-15">
												<p class="m-b-5">Jessie Ortiz</p>
												<p class="mb-0 text-muted text-small">Web Developer</p>
											</div>
										</div>
									</td>
									<td>Android App</td>
									<td><label class="badge badge-danger">High</label></td>
									<td> <span class="badge badge-success badge-pill"> 27k <i class="mdi mdi-chart-line"></i>  </span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
			<div class="card m-b-20 overflow-hidden">
				<h5 class="card-header">Orders</h5>
				<div class="card-body overflow-hidden">
					<h5 class="card-subtitle">Today Orders</h5>
					<h2 class="font-medium text-primary m-t-20 m-b-20">26785</h2>
					<span class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </span>
					<div class=" text-center mt-3 mb-4 card-body p-1">
						<span class="sparkline17 overflow-hidden">
						</span>
					</div>
					<div class="row mt-4">
						<div class="col-6 text-center">
							<label class="tx-12 font-weight-bold">This Week</label><div class="clear-fix"></div>
							<span class="sparkline_bar4 overflow-hidden"></span>
							<h4 class="font-weight-semibold text-primary mt-2">20,321</h4>
						</div><!-- col -->
						<div class="col-6 border-left text-center">
							<label class="tx-12 font-weight-bold">Last Week</label><div class="clear-fix"></div>
							<span class="sparkline_bar2 overflow-hidden"></span>
							<h4 class="font-weight-semibold text-primary mt-2">15,321</h4>
						</div><!-- col -->
					</div><!-- row -->
				</div>
			</div>
		</div>
	</div>

@endsection

@section('footer_scripts')
	<!-- jQuery Sparklines -->
	<script src="{{asset('backend/assets/plugins/jquery-sparkline/dist/jquery.sparkline.js')}}"></script>

	<!-- ECharts -->
	<script src="{{asset('backend/assets/plugins/echarts/dist/echarts.js')}}"></script>

	<!--Jquery.knob js-->
	<script src="{{asset('backend/assets/plugins/othercharts/jquery.knob.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/othercharts/jquery.sparkline.min.js')}}"></script>

	<!--Morris js-->
	<script src="{{asset('backend/assets/plugins/morris/morris.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/morris/raphael.min.js')}}"></script>

	<!--Dashboard js-->
	<script src="{{asset('backend/assets/js/dashboard.js')}}"></script>
	<script src="{{asset('backend/assets/js/sparkline.js')}}"></script>
	<script src="{{asset('backend/assets/js/apexcharts.js')}}"></script>
@endsection
