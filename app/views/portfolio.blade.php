@extends('layouts.master')

@section('portfolio')
	<h1>My Portfolio</h1>
	<section id="main-content">
		<div class="row">
			<div class="small-12 columns">
				<h3>Website Development:</h3>
			</div>
		</div>
		<div class="row">
			<div class="panel large-12 columns">
				<div class="row">
					<div class="large-4 columns">
						<a href='#'><img class='thumbnail' src="http://placehold.it/300x200"/></a>
						<h5>Capstone Project</h5>
						<p>A blankity-blank written in Laravel.</p>
					</div>
					<div class="large-4 columns">
						<a href='#'><img class='thumbnail' src="/img/MileMatrix.png"/></a>
						<h5>Mile Matrix</h5>
						<p>A credit card rewards program recommendation engine in Laravel.</p>
					</div>
					<div class="large-4 columns">
						<a href='#'><img class='thumbnail' src="/img/Adlister.png"/></a>
						<h5>Adlister</h5>
						<p>A Craigslist-clone written in PHP.</p>
					</div>
				</div>
			</div>
			<div class='large-12 columns' style="height:25px;">
			</div>
			<div class="panel large-12 columns">
				<h3>Web Applications:</h3>
				<div class="row">
					<div class="large-4 columns">
						<a href='#'><img src="/img/Tremors_small.png"/></a>
						<h5>Whack-a-worm Game</h5>
						<p>A whack-a-mole style game created with jQuery.</p>
					</div>
					<div class="large-4 columns">
						<a href='#'><img src="/img/SimonSays-small.png"/></a>
						<h5>Simon Says Game</h5>
						<p>A sequence memory game created with JavaScript.</p>
					</div>
					<div class="large-4 columns">
						<a href='#'><img src="/img/Calculator_small.png"/></a>
						<h5>JavaScript Calculator</h5>
						<p>Written in, you guessed it, JavaScript!</p>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<script>
    	$(document).ready(function(){
    		// $('.active').removeClass('active');
    		$('#portfolio').addClass('active');
    	});
    </script>
@stop