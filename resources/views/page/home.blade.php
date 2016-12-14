@extends('layouts.main')

@section('head')

@include('layouts.partials.head')

@stop

@section('content')


<div class="banner">
    <ul>
        <li class="banner-image banner-image-1"><a href="{{ URL::to('about') }}"><div class="banner-copy right"><span class="header">Expert residential and commercial electricians<br></span>
        <br>Years of experience, friendly &amp reliable service
        <br><br><strong>Find out more ></strong></div></a></li>
        <li class="banner-image banner-image-2"><a href="{{ URL::to('about') }}"><div class="banner-copy left"><span class="header">Full and partial rewires<br></span>
        <br>Lorem ipsum dolor sit amet, utamur detraxit an eam. Facer exerci similique an sit, erat aeque fastidii eam no, id duo ferri appellantur delicatissimi. Ius eros minimum an.
        <br><br><strong>Find out more ></strong></div></a></li>
        <li class="banner-image banner-image-3"><a href="{{ URL::to('about') }}"><div class="banner-copy right"><span class="header">Burglar Alarm & CCTV installation<br></span>
        <br>Lorem ipsum dolor sit amet, utamur detraxit an eam. Facer exerci similique an sit, erat aeque fastidii eam no, id duo ferri appellantur delicatissimi. Ius eros minimum an.
        <br><br><strong>More info here ></strong></div></a></li>
        <li class="banner-image banner-image-4"><a href="{{ URL::to('about') }}"><div class="banner-copy left"><span class="header">Consumer unit upgrades<br></span>
        <br>Lorem ipsum dolor sit amet, utamur detraxit an eam. Facer exerci similique an sit, erat aeque fastidii eam no, id duo ferri appellantur delicatissimi. Ius eros minimum an.
        <br><br><strong>Find out more ></strong></div></a></li>
        <li class="banner-image banner-image-5"><a href="{{ URL::to('domestic') }}"><div class="banner-copy right"><span class="header">Lighting updates<br></span>
        <br> i.e down lights, led lighting and security lighting Lorem ipsum dolor sit amet, utamur detraxit an eam. Facer exerci similique an sit, erat aeque fastidii eam no, id duo ferri appellantur delicatissimi. Ius eros minimum an.
        <br><br><strong>Click for more info ></strong></div></a></li>
        <li class="banner-image banner-image-6"><a href="{{ URL::to('about') }}"><div class="banner-copy left"><span class="header">Energy saving upgrades<br></span>
        <br>Lorem ipsum dolor sit amet, utamur detraxit an eam. Facer exerci similique an sit, erat aeque fastidii eam no, id duo ferri appellantur delicatissimi. Ius eros minimum an.
        <br><br><strong>More here ></strong></div></a></li>
    </ul>
</div>

<section grid>
  <article column="6" class="link-box domestic"><a href="{{ url('/domestic') }}"><h3>Domestic Projects</h3></a></article>
  <article column="6" class="link-box commercial"><a href="{{ url('/commercial') }}"><h3>Commercial Projects</h3></a></article>
</section>



<script type="text/javascript" src="{{ URL::asset('js/unslider.js') }}"></script>
<script>$(function() { $('.banner').unslider({ autoplay: true, delay: 7000 }) })</script>

@stop