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
		<style>
			body {
				font: 'Nunito';
			}

			h1 {
			@apply text-4xl font-bold;
			}
			h2 {
			@apply text-xl;
			}
			h3 {
			@apply text-lg;
			}
			a {
			@apply text-blue-600 underline;
			}
		</style>
    </head>
    <body>
	<div id="app">

		
        <div class="h-12"></div>


        
        @yield('content')
		



		{{-- @section('navbar') --}}
		
		<navbar-component></navbar-component>
		
		{{-- <div class="bg-gray-200 fixed flex justify-between items-center top-0 w-full h-12 md:hidden">
			<div class="px-4 font-semibold text-gray-800 text-3xl">
				SteamDiesel
			</div>
			<div class="w-2/3 flex justify-around mx-4 text-sm">
				<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
					href="/">
					Home
				</a>
				<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
					href="/about">
					About
				</a>
				<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
					href="/portfolio">
					Portfolio
				</a>
				<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
					href="/stack">
					Stack
				</a>
				<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
					href="/services">
					Services
				</a>
				<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
					href="/contact">
					Contact
				</a>
			</div>
		</div> --}}
		{{-- @endsection --}}

		@section('footer')
            This is the master footer.
		@show
</div>
<script src="js/app.js"></script>

</body>
</html>