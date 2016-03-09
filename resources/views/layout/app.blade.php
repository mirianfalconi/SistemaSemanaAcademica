<!DOCTYPE html>
		<html lang="en">
		    <head>
		        <title>Laravel Quickstart - Basic</title>

					<script type="text/javascript" src="{{ asset('js/jquery.2.2.1.min.js') }}"></script>
					 <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
		    </head>

		    <body>
		        <div class="container">
		            <nav class="navbar navbar-default">
		                <!-- Navbar Contents -->
		            </nav>
		        </div>

		        @yield('content')
		    </body>
		</html>
