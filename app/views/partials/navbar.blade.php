<!-- Start Navbar -->
		<div class="sticky">
			<nav class="top-bar" data-topbar role="navigation">
			  	<ul class="title-area">
				    <li class="name">
				     	<h1><a href="#">Logo Here</a></h1>
				    </li>
				    	<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			    </ul>

			  	<section class="top-bar-section">
				    <!-- Right Nav Section -->
				    <ul class="right">
				    	<li>
				    		<form id="search" method="GET" action="{{{ action('PostsController@index') }}}">
				    			{{-- <i class="fa fa-search"></i> --}}
				    			<input type='text' name='search' value='' placeholder="&#61442;">
				    		</form>
				    	</li>
				      	<li id='resume'><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
				      	<li id='portfolio' class="has-dropdown not-click">
				        	<a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a>
				        	<ul class="dropdown">
				          		<li><a href="http://adlister.dev">adLister</a></li>
				          		<li><a href="#">Capstone Project</a></li>
				          		<li><a href="http://codeup.dev/calculator_js.html">Calculator</a></li>
				          		<li><a href="http://whackamole.dev/whackaworm.html">Whack-a-Worm Game</a></li>
				          		<li><a href="http://simplesimon.dev/index.html">Simon Says Game</a></li>
				        	</ul>
				      	</li>
				    </ul>

				    <!-- Left Nav Section -->
				    <ul class="left">
				      <li id='about' class=''><a href="{{{action('HomeController@showHome')}}}">About</a></li>
				    </ul>
			    </section>
			</nav>
		</div>
		<div class="row">
	        <div class="medium-12 columns text-center">
	            <p class="arrow"><i class="fa fa-angle-down"></i></p>
	        </div>
	    </div>
	</section>
<!-- End Navbar -->
