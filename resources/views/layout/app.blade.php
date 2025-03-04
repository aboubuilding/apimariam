

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from tixia.dexignzone.com/xhtml/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Feb 2025 11:56:19 GMT -->
<head>
   <!-- Title -->
	<title>@yield('title')</title>
 
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
   
	
   
	
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin')}}/images/favicon.png">
	<link rel="stylesheet" href="{{asset('admin')}}/vendor/chartist/css/chartist.min.css">
    <link href="{{asset('admin')}}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="{{asset('admin')}}/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
   <link class="main-css" href="{{asset('admin')}}/css/style.css" rel="stylesheet">


    @yield('css')

</head>
<body>

   



    <div id="main-wrapper">

    	    @include('components.logo')


    	   @include('components.chatbox')


    	     @include('components.header')

    	      @include('components.menu')

    	          @yield('contenu')

     
		
          @include('components.footer')

       

    </div>
   
  @yield('js')
	
    <script src="{{asset('admin')}}/js/custom.min.js"></script>
	<script src="{{asset('admin')}}/js/deznav-init.js"></script>
	<script src="{{asset('admin')}}/js/demo.js"></script>
    <script src="{{asset('admin')}}/js/styleSwitcher.js"></script>
	<script>
		jQuery(document).ready(function(){
			setTimeout(function(){
				dezSettingsOptions.version = 'light';
				new dezSettings(dezSettingsOptions);
				setCookie('version','light');
			},1500)
		});
	</script>
	
</body>

</html>