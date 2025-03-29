<!DOCTYPE html>
<html lang="en" data-layout-mode="light_mode">


<!-- Mirrored from dreamspos.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 11:50:29 GMT -->
<head>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


	<script src="{{asset('admin')}}/assets/js/theme-script.js" type="971c37a9497d43b5d76f2274-text/javascript"></script>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('admin')}}/assets/img/favicon.png">

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('admin')}}/assets/img/apple-touch-icon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('admin')}}/assets/css/bootstrap.min.css">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="{{asset('admin')}}/assets/css/bootstrap-datetimepicker.min.css">

	<!-- animation CSS -->
	<link rel="stylesheet" href="{{asset('admin')}}/assets/css/animate.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('admin')}}/assets/plugins/select2/css/select2.min.css">

	<!-- Daterangepikcer CSS -->
	<link rel="stylesheet" href="{{asset('admin')}}/assets/plugins/daterangepicker/daterangepicker.css">

	<!-- Tabler Icon CSS -->
	<link rel="stylesheet" href="{{asset('admin')}}/assets/plugins/tabler-icons/tabler-icons.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('admin')}}/assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="{{asset('admin')}}/assets/plugins/fontawesome/css/all.min.css">

	<!-- Color Picker Css -->
	<link rel="stylesheet" href="{{asset('admin')}}/assets/plugins/%40simonwep/pickr/themes/nano.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('admin')}}/assets/css/style.css">
	<link rel="stylesheet" href="{{asset('admin')}}/assets/css/mystyles.css">




    @yield('css')

</head>

<body>
	<div id="global-loader">
		<div class="whirly-loader"> </div>
	</div>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

        @include('components.header')
        @include('components.sidebar')
        @include('components.horizontal')
        @include('components.colsidebar')

        @yield('contenu')





	</div>
	<!-- /Main Wrapper -->



	<!-- jQuery -->
	<script src="{{asset('admin')}}/assets/js/jquery-3.7.1.min.js" type="971c37a9497d43b5d76f2274-text/javascript"></script>

	<!-- Feather Icon JS -->
	<script src="{{asset('admin')}}/assets/js/feather.min.js" type="971c37a9497d43b5d76f2274-text/javascript"></script>

	<!-- Slimscroll JS -->
	<script src="{{asset('admin')}}/assets/js/jquery.slimscroll.min.js" type="971c37a9497d43b5d76f2274-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{asset('admin')}}/assets/js/bootstrap.bundle.min.js" type="971c37a9497d43b5d76f2274-text/javascript"></script>


    @yield('js')

	<!-- Custom JS -->
	<script src="{{asset('admin')}}/assets/js/theme-colorpicker.js" type="971c37a9497d43b5d76f2274-text/javascript"></script>
	<script src="{{asset('admin')}}/assets/js/script.js" type="971c37a9497d43b5d76f2274-text/javascript"></script>


<script src="{{asset('admin')}}/rocket-loader.min.js" data-cf-settings="971c37a9497d43b5d76f2274-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"921c45dbffe7bc14","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>




</body>



</html>
