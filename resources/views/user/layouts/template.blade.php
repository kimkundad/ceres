<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
	<!--begin::Head-->
	<head>
		<title>Ceres HTML Pro- Bootstrap 5 HTML Multipurpose Admin Dashboard Theme by Keenthemes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		
		<!--end::Global Stylesheets Bundle-->

		@include('user.layouts.inc-style')
    	@yield('stylesheet')

	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--begin::Theme mode setup on page load-->
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					


					@include('user.layouts.inc-header')


					<!--begin::Toolbar-->
					<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column">
								<!--begin::Title-->
								<h1 class="d-flex text-white fw-bold fs-2qx my-1 me-5">Account Overview</h1>
								<!--end::Title-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">
									<!--begin::Item-->
									<li class="breadcrumb-item text-white opacity-75">
										<a href="{{ url('/') }}" class="text-white text-hover-primary">Home</a>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item">
										<span class="bullet bg-white opacity-75 w-5px h-2px"></span>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item text-white opacity-75">Account</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item">
										<span class="bullet bg-white opacity-75 w-5px h-2px"></span>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item text-white opacity-75">Overview</li>
									<!--end::Item-->
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title-->
							
						</div>
						<!--end::Container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">@yield('content')</div>
						
						<!--end::Post-->
					</div>
					<!--end::Container-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-semibold me-1">2022&copy;</span>
								<a  target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
								<li class="menu-item">
									<a  target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a  target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a  target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		
	

		@include('user.layouts.inc-script')
    @yield('scripts')

	</body>
	<!--end::Body-->
</html>