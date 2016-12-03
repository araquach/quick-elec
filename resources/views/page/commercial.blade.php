@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => '',
	'ogtitle' => '',
	'ogdescription' => '',
	'title' => 'Quick-Elec Commercial Electricians'
	])
@stop

@section('content')

<div class="page-content commercial">
	
	<section grid class="full-page">
	  	<article column="7">
	  		<h2>Fully equipped for all commercial projects</h2>
	  		<p><strong>At QUICK-ELEC we have the experience and qualifications to be well equipped to carry out all types of Commercial work quickly and efficiently.</strong></p>
			<p>Aiming at all times to achieve 100% customer satisfaction with our prompt and friendly service, if you require:</p>
	  	</article>
	  	<article column="4">
	  		<img src="">Hello!</img>
	  	</article>
	  	<article column="7">
	  		<ul>
		    	<li>Fault Finding & Repairs</li>
		    	<li>New Installations</li>
		    	<li>Rewiring</li>
		    	<li>Emergency Lighting</li>
		    	<li>Fire Alarm Systems</li>
		    	<li>Office Lighting</li>
		    	<li>Telephone and Data</li>
		    	<li>Security Lighting</li>
		    	<li>Sockets and Switches</li>
		    	<li>Light Fittings</li>
		    	<li>Outdoor Electrical Work</li>
			</ul>
		</article>
	  	<article column="4">
	  		<img src="">Goodbye</img>
	  	</article>
	</section>

</div>

@stop