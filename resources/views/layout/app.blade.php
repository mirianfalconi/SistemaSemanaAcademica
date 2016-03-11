<!DOCTYPE html>
		<html lang="pt-br">
		    <head>
		        <title>Laravel Quickstart - Basic</title>

						<meta charset="utf-8">
						<meta http-equiv="X-UA-Compatible" content="IE=edge">
						<meta name="viewport" content="width=device-width, initial-scale=1">

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
