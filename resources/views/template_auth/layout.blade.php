<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <!-- CSRF Token -->
        <meta name='csrf-token' content='{{ csrf_token() }}'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> @yield('title',' login page') </title>

		<!--- Favicon --->
		<link rel="icon" href="../../assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css --->
		<link href="../../assets/css/icons.css" rel="stylesheet">

		<!-- Owl-carousel css-->
		<link href="../../assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!--- Right-sidemenu css --->
		<link href="../../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!--- Style css --->
		<link href="../../assets/css/style-dark.css" rel="stylesheet">
		<link href="../../assets/css/style.css" rel="stylesheet">
		<link href="../../assets/css/skin-modes.css" rel="stylesheet">

		<!--- Sidemenu css --->
		<link href="../../assets/css/sidemenu.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="../../assets/css/animate.css" rel="stylesheet">
	</head>

	<body class="main-body app sidebar-mini dark-theme">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
        @yield('content')

        	<!--- JQuery min js --->
		<script src="../../assets/plugins/jquery/jquery.min.js"></script>

<!--- Datepicker js --->
<script src="../../assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

<!--- Bootstrap Bundle js --->
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!--- Ionicons js --->
<script src="../../assets/plugins/ionicons/ionicons.js"></script>

<!--- Chart bundle min js --->
<script src="../../assets/plugins/chart.js/Chart.bundle.min.js"></script>

<!--- JQuery sparkline js --->
<script src="../../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

<!--- Internal Sampledata js --->
<script src="../../assets/js/chart.flot.sampledata.js"></script>

<!--- Rating js --->
<script src="../../assets/plugins/rating/jquery.rating-stars.js"></script>
<script src="../../assets/plugins/rating/jquery.barrating.js"></script>

<!--- Eva-icons js --->
<script src="../../assets/js/eva-icons.min.js"></script>

<!--- Moment js --->
<script src="../../assets/plugins/moment/moment.js"></script>

<!--- Perfect-scrollbar js --->
<script src="../../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

<!--- Sidebar js --->
<script src="../../assets/plugins/side-menu/sidemenu.js"></script>

<!-- right-sidebar js -->
<script src="../../assets/plugins/sidebar/sidebar.js"></script>
<script src="../../assets/plugins/sidebar/sidebar-custom.js"></script>

<!-- Morris js -->
<script src="../../assets/plugins/raphael/raphael.min.js"></script>
<script src="../../assets/plugins/morris.js/morris.min.js"></script>

<!--- Scripts js --->
<script src="../../assets/js/script.js"></script>

<!--- Index js --->
<script src="../../assets/js/index.js"></script>



<!--- Custom js --->
<script src="../../assets/js/custom.js"></script>

</body>
</html>