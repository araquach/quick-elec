@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => '',
	'ogtitle' => '',
	'ogdescription' => '',
	'title' => ''
	])
@stop

@section('content')

<div class="page-content about">
    <div grid class="full-page">
	    
	    <div column="8">
	    	<h2>Expert Residential &amp; Commercial Electricians</h2>
	    </div>
	    
	    <article column="8">
		    <p><strong>With years of experience in revamping residential and commercial properties, QUICK-ELEC are electrical contractors covering a range of domestic and commercial electrical  services all at very competitive prices.</strong></p>
		    <p>We specialise in domestic rewires as we have fully qualified rewire teams who complete work only to the highest standard.</p>
		    <p>We understand what individuals and modern businesses look for when selecting an electrical contractor and we make extra efforts to exceed our customers' expectations.</p>
	    </article>
	    <article column="4">
	    	{{ Html::image('images/domestic/dom1.jpg', 'Quick Elec', array('width' => 300 , 'height' => 200)) }}
	    </article>
	    <article column="8">
		    <a href="{{ URL::to('domestic') }}" class="sector-link">Domestic customers click here &gt;</a>
		    <a href="{{ URL::to('commercial') }}" class="sector-link">Commercial customers click here &gt;</a>
	    </article>
	    <article column="4">
		    {{ Html::image('images/domestic/dom1.jpg', 'Quick Elec', array('width' => 300 , 'height' => 200)) }}
	    </article>
	    
	    
	    
	</div>
</div>

@stop