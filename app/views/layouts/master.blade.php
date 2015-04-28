<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel Blog | Home</title>

    @include('partials.header')

</head>
<body>
	<header>
		@include('partials.navbar')
	</header>

	@yield('content')

	<script src="/js/vendor/jquery.js"></script>
	<script src="/js/foundation.min.js"></script>
	<script>
		$(document).ready(function(){
			if (){
				$('#about').addClass('active');
			}
		});
	</script>
</body>
</html>