<head>
	<meta charset="utf-8" />
	<title>{{$title = "Home"}}</title>
	<meta name="description" content="ECommerce Dashboard 2" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="{{asset('customer/assets/css/pages/wizard/wizard-4.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('customer/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('customer/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('customer/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<script src="{{asset('customer/assets/js/custom/widgets.js')}}"></script>
	<script src="{{asset('customer/assets/js/custom/apps/chat/chat.js')}}"></script>
	<script src="{{asset('customer/assets/js/custom/modals/create-app.js')}}"></script>
	<script src="{{asset('customer/assets/js/custom/modals/upgrade-plan.js')}}"></script>
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="{{asset('customer/assets/media/logos/favicon.ico')}}" />
	<link href="{{asset('css/toastr.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/confirm.css')}}" rel="stylesheet" type="text/css" />
</head>