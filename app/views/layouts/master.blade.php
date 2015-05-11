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
			@yield('homepage-pic')
			@include('partials.navbar')
		</header>

		@if (Session::has('successFlash'))
	    	<div class='row'>
	    		<div data-alert class="alert-box success round large-10 large-centered columns">{{{ Session::get('successFlash') }}}</div>
			</div>
		@endif
		@if (Session::has('errorFlash'))
		    </div class='row'>
		    	<div data-alert class="alert-box warning round large-10 large-offset-1 large-centered columns">{{{ Session::get('errorFlash') }}}</div>
			</div>
		@endif

<!-- ========== Start main section ========== -->

		<div id="main" class="large-10 large-offset-1 columns">
			<div id='allPosts'>
				@yield('all-posts')
			</div>
			<div id='showPost'>
				@yield('one-post')
				<!-- @yield('error') -->
			</div>
			<div id='form'>
				@yield('form')
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

	<script src="/js/foundation.min.js"></script>
	<script src="/js/foundation/foundation.js"></script>
  	<script src="/js/foundation/foundation.topbar.js"></script>
  	<script>
	    $(document).foundation();	// necessary to activate foundation jquery
	</script>
</body>
</html>