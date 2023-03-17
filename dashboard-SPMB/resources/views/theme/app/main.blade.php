<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('theme.app.head')
<body id="kt_body" style="background-image: url({{asset('customer/assets/media/bg/bg-10.jpg')}})" class="quick-panel-right demo-panel-right offcanvas-right header-fixed page-loading">
	@include('theme.app.header')
	 <!--begin::Content-->
	 <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Entry-->
		<div class="d-flex flex-column-fluid">
			<!--begin::Container-->
			<div class="container">
				<!--begin::Page Layout-->
				<div class="d-flex flex-row">
					<!--begin::Layout-->
					<div class="flex-row-fluid ml-lg-8">
						{{$slot}}
					</div>
					<!--end::Layout-->
				</div>
				<!--end::Page Layout-->
			</div>
			<!--end::Container-->
		</div>
		<!--end::Entry-->
	</div>
	<!--end::Content-->
	@include('theme.app.footer')
	@auth
		@include('theme.app.profile')
	@endauth
	<!-- JavaScripts ============================================= -->
	@include('theme.app.js')
	@yield('custom_js')
</body>
</html>