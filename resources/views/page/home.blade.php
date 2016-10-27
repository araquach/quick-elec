@extends('layouts.main')

@section('head')

@include('layouts.partials.head')

@stop

@section('content')

<div class="banner">
    <ul>
        <li class="banner-image banner-image-1"></li>
        <li class="banner-image banner-image-2"></li>
        <li class="banner-image banner-image-3"></li>
        <li class="banner-image banner-image-4"></li>
        <li class="banner-image banner-image-5"></li>
    </ul>
</div>

<div class="page-content">
    
</div>

<script type="text/javascript" src="{{ URL::asset('js/unslider.js') }}"></script>
<script>$(function() { $('.banner').unslider() })</script>

@stop