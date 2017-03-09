<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="{{ asset('bower_components/sweetalert/dist/sweetalert.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset ('bower_components/sweetalert/dist/sweetalert.css') }}">

</head>
<body>
 @include('sweet::alert')
		<div class="container">

           <div class="row">
             <div class="col-md-12">
                  @include("nav")
             </div>
           </div>
           <div class="row">

              <div class="col-md-8">
                @yield('main-content')               
             </div>

          
             <div class="col-md-4">
                  <h5> 
                  MAP WILL GO HERE
                  </h5>
             </div>
          
           </div>

           <footer class="row">
             <div class="col-md-12">
                 <p class="text-center">All Right Reserved @ {{ date('Y')}}</p>
             </div>
           </footer>

		</div>

</body>
</html>