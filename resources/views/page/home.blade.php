@extends('layouts.main')

@section('head')

@include('layouts.partials.head')

@stop

@section('content')


<div class="banner">
    <ul>
        <li class="banner-image banner-image-4"><div class="banner-copy left">Full and partial rewires</div></li>
        <li class="banner-image banner-image-2"><div class="banner-copy right">Burglar Alarm & cctv installation</div></li>
        <li class="banner-image banner-image-3"><div class="banner-copy left">Consumer unit upgrades</div></li>
        <li class="banner-image banner-image-1"><div class="banner-copy right">Lighting updates i.e down lights, led lighting and security lighting</div></li>
        <li class="banner-image banner-image-5"><div class="banner-copy left">Energy saving upgrades</div></li>
    </ul>
</div>


<div class="page-content">
    
</div>

<script type="text/javascript" src="{{ URL::asset('js/unslider.js') }}"></script>
<script>$(function() { $('.banner').unslider({ autoplay: true, delay: 7000 }) })</script>

@stop