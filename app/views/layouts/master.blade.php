<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel Blog | Home</title>

    @include('partials.header')

</head>
<body>
	<div id="wrap" class="clearfix">
		<header>
			@include('partials.navbar')
		</header>

<!-- ========== Start main section ========== -->

		<div id="main" class="large-10 large-offset-1 columns">
			<div id='form'>
				@yield('create-post')
			</div>
			<div id='aboutContent'>
				@yield('about')
			</div>
			<hr>
			<div id='resumeContent'>
				@yield('resume')
			</div>
			<hr>
			<div id='portfolioContent'>
				@yield('portfolio')
			</div>
		</div>
<!-- ========== End main section ========== -->

			@include('partials.footer')
	</div>

	<script src="/js/vendor/jquery.js"></script>
	<script src="/js/foundation.min.js"></script>
	<script src="/js/foundation/foundation.js"></script>
  	<script src="/js/foundation/foundation.topbar.js"></script>
  	<script>
	    $(document).foundation();	// necessary to activate foundation jquery
	</script>
</body>
</html>