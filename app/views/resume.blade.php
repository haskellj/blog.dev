@extends('layouts.master')

@section('resume')
	<h1>Resume</h1>
	<section>
      <!-- Three columns of text below the carousel -->
      	<div id='resumeMenu' class="row">
        	<div class="large-4 text-center columns">
          		<div class="iconCircle">
            		<a href="resume_edu.html">
            			<i id="cap" class="fa fa-graduation-cap fa-5x"></i>
            		</a>
          		</div>
          		<a href="resume_edu.html" class="bodyLinks">
          			<h2 class="extraMargin">Education</h2>
          		</a>
          		<p class="extraMargin">See where I earned my degrees and received my training!</p>
          		<!-- <p><a class="btn btn-default" href="/resume_edu.html" role="button">View details »</a></p> -->
        	</div><!-- /.col-lg-4 -->
        	<div class="large-4 text-center columns">
          		<div class="iconCircle">
            		<a href="resume_lang.html">
            			<i id ="code" class="fa fa-code fa-5x "></i>
            		</a>
          		</div>
          		<a href="resume_lang.html" class="bodyLinks">
          			<h2>Programming Languages</h2>
          		</a>
          		<p>If I don't know the exact language you need, not to worry. I'll learn it!</p>
          		<!-- <p><a class="btn btn-default" href="#" role="button">View details »</a></p> -->
	        </div><!-- /.col-lg-4 -->
	        <div class="large-4 text-center columns">
	          	<div class="iconCircle">
	            	<a href="resume_work.html">
	            		<i id="clock" class="fa fa-clock-o fa-5x "></i>
	            	</a>
	          	</div>
	          	<a href="resume_work.html" class="bodyLinks">
	          		<h2 class="extraMargin">Work History</h2>
	          	</a>
	          	<p class="extraMargin">This might surprise you...</p>
	          	<!-- <p><a class="btn btn-default" href="#" role="button">View details »</a></p> -->
	        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </section>

    <script>
    	$(document).ready(function(){
    		$('.active').removeClass('active');
    		$('#resume').addClass('active');
    	});
    </script> 
@stop