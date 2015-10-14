<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div id="wrapper">
        @include('includes.header')

        <div id="page-wrapper">
        	<div class="container-fluid">
        		@yield('content')
        	</div>
        </div>
    </div>

        @include('includes.footer')
</body>
</html>