<!doctype html>
<html>
    <head>
		
		
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
		<title>{{ $title }}</title>
		<meta name="description" content='{{$description}}'>
		<link rel="canonical" href="{{$url}}">
        
        <!-- Styles -->
		<link rel="stylesheet" href="css/app.css">
		
    </head>
    <body>
	<div id="app">

		
        <div class="h-12"></div>


        
        @yield('content')
		
		<navbar-component></navbar-component>
		
		@section('footer')
            <div class="w-full px-12 md:px-24 py-10 bg-gray-600">
				<div class="w-full flex justify-center">
					<div class="w-full flex justify-center">
						<button class="px-5 py-3 bg-teal-500 rounded-lg border border-2 border-teal-700">Email</button>
					</div>

					<div class="w-full flex justify-center">
						<button class="px-5 py-3 bg-teal-500 rounded-lg border border-2 border-teal-700">Call</button>
					</div>
				</div>
				<div class="flex flex-wrap">
					<div class="">
						<div>
							Who we are
						</div>
						<div>
							We're a group of Brisbane based web designers, developers and artists. 
							
						</div>
					</div>
				</div>
			</div>
		@show
</div>
<script src="js/app.js"></script>

</body>
</html>