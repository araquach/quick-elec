@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'QUICK-ELEC domestic electricians are experts in all domestic electrical jobs. Our friendly and reliable electricians can carry out everything from full and partial re-wires, installation of burglar alarm & CCTV, consumer unit ugrades or simply changing a light fitting.
	Like so many of our domestic customers, once you have used our services once you will be sure to keep our business card close to hand.
	For over a decade we have been operating in Warrington and the North West offering a local, reliable and trustworthy service that people come back to time and time again.
	Our fully qualified electricians can personally undertake any electrical work you need, and no job is too small.',
	'keywords' => 'domestic, electricians, Warrington, North West, re-wires, burglar alarms',
	'ogtitle' => 'Domestic Electricians',
	'ogdescription' => '',
	'title' => 'Quick-Elec - Domestic Electricians'
	])
@stop

@section('content')

<div class="page-content domestic">
	<section grid class="full-page">
		<article column="7">
			<h2>Friendly, Reliable, Experienced</h2>
			<p><strong>QUICK-ELEC domestic electricians are experts in all domestic electrical jobs. 
			   Our friendly and reliable electricians can carry out everything from full and partial re-wires, installation of burglar alarm & CCTV, 
			   consumer unit ugrades or simply changing a light fitting.</strong></p>
		</article>
		<article column="4">
			<img src="">Hello!</img>
		</article>
		<article column="7">
			<p>Like so many of our domestic customers, once you have used our services once you will be sure to keep our business card close to hand.</p>
		    <p>For over a decade we have been operating in <em>Warrington and the North West</em> offering a local, reliable and trustworthy service that people come back to time and time again.</p>
		    <p>Our fully qualified electricians can personally undertake any electrical work you need, and no job is too small.</p>
		</article>
		<article column="4">
			<img src="">Goodbye!</img>
		</article>
			
				
	</section>
</div>

@stop