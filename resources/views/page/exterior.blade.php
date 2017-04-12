@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'QUICK-ELEC domestic electricians are experts in all domestic electrical jobs. Our friendly and reliable electricians can carry out everything from full and partial re-wires, installation of burglar alarm & CCTV, consumer unit ugrades or simply changing a light fitting.
	Like so many of our domestic customers, once you have used our services once you will be sure to keep our business card close to hand.
	For over a decade we have been operating in Warrington and the North West offering a local, reliable and trustworthy service that people come back to time and time again.
	Our fully qualified electricians can personally undertake any electrical work you need, and no job is too small.',
	'keywords' => 'domestic, electricians, Warrington, North West, re-wires, burglar alarms',
	'ogtitle' => 'Domestic Electricians',
	'ogdescription' => 'QUICK-ELEC domestic electricians are experts in all domestic electrical jobs. Our friendly and reliable electricians can carry out everything from full and partial re-wires, installation of burglar alarm & CCTV, consumer unit ugrades or simply changing a light fitting.
	Like so many of our domestic customers, once you have used our services once you will be sure to keep our business card close to hand.
	For over a decade we have been operating in Warrington and the North West offering a local, reliable and trustworthy service that people come back to time and time again.
	Our fully qualified electricians can personally undertake any electrical work you need, and no job is too small.',
	'ogimage' => url('/') . '/images/fb_og/qe_living_room_fb.jpg',
	'title' => 'Quick-Elec - Domestic Electricians - Warrington, Cheshire & North West Electricians'
	])
@stop

@section('content')

<div class="page-content external">
	<section grid class="full-page">
		
		<div column="7">
			<h2>Add Some light to your outdoor space</h2>
		</div>
		
		<article column="7">
			<p><strong>If you're looking to add that bit of extra class and quality to your garden or you need lighting for extra security at your home or business, Quick-Elec have the experience and expertise to help you.</strong></p>
			<p>Quick-Elec specialise in home and garden lighting improvements:</p>
			<ul>
				<li>Decking Lighting</li>
				<li>Up &amp; Down Lights</li>
				<li>Wall Lighting</li>
				<li>Flood/Security Lighting</li>
				<li>Tile &amp; Brick Lights</li>
				<li>Sign Lighting</li>
				<li>Post &amp; Bollard Lighting</li>
				<li>Lamp Post Lighting</li>
			</ul>
			<p>Our skilled electricians will complete any of the above installations to the highest possible standard.</p>
		</article>
		<article column="5">
			{{ Html::image('images/stock/qe_kitchen.jpeg', 'Quick Elec', array('width' => 300 , 'height' => 200)) }}
		</article>
		<article column="7">
		    <p><em>Click the link below to arrange for a quote - either call us or use our contact form</em></p>
		    <a href="{{ URL::to('contact') }}" class="sector-link">Contact us for a quote</a>
		</article>
		<article column="5">
			{{ Html::image('images/stock/qe_living_room.jpeg', 'Quick Elec', array('width' => 300 , 'height' => 200)) }}
		</article>
			
				
	</section>
</div>

@stop