
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from spruko.com/demo/kharna/html/Kharna_Admin-light/datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Dec 2018 06:37:03 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kharna-Admin Dashboard</title>
      @include('backend.partials.css')

	</head>

	<body class="app ">

		{{-- <div id="spinner"></div> --}}

		<div id="app">
			<div class="main-wrapper" >
			@include('backend.partials.navbar')

				  @include('backend.partials.aside')

				<div class="app-content">
					<section class="section">

            @include('backend.partials.breadcrumbs')

					@yield('contains')

					</section>
				</div>


        @include('backend.partials.footer')

			</div>
		</div>

	@include('backend.partials.js')

	</body>

<!-- Mirrored from spruko.com/demo/kharna/html/Kharna_Admin-light/datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Dec 2018 06:37:33 GMT -->
</html>
