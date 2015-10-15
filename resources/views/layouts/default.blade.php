<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
	<div id="wrapper">
		@include('includes.nav')
		<div id="page-wrapper">
	        <div class="container-fluid">
	            @yield('content')
	        </div>
	    </div>
	</div>
</div>
</body>
</html>