 <!DOCTYPE html>
<html>
<head>
	<title>myProfile</title>
	<!-- bootstrapcdn css -->
	<!-- <link rel="stylesheet" type="text/css" href="/myProfile/public/css/app.css"> -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="/myProfile/resources/views/partials/style.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
    <!-- @include('partials.nav') -->
   @include('partials.navigationbar')
   </nav>
   @include('partials.banners')

   <section class="general-content">
<div class="container">
<div class="row">
	<div class="col-sm-6">@yield('content')</div>
	<div class="col-sm-6">@yield('create')</div>
</div>	
</div>
	</section>

</body>
</html>