@extends('layouts.main')

@section('head')

@include('layouts.partials.head')

@stop

@section('content')


<div class="banner">
    <ul>
        <li class="banner-image banner-image-4"><a href="#"><div class="banner-copy left"><span class="header">Full and partial rewires<br></span>
        <br>Lorem ipsum dolor sit amet, utamur detraxit an eam. Facer exerci similique an sit, erat aeque fastidii eam no, id duo ferri appellantur delicatissimi. Ius eros minimum an.
        <br><br><strong>Find out more ></strong></div></a></li>
        <li class="banner-image banner-image-2"><a href="#"><div class="banner-copy right"><span class="header">Burglar Alarm & cctv installation<br></span>
        <br>Lorem ipsum dolor sit amet, utamur detraxit an eam. Facer exerci similique an sit, erat aeque fastidii eam no, id duo ferri appellantur delicatissimi. Ius eros minimum an.
        <br><br><strong>More info here ></strong></div></a></li>
        <li class="banner-image banner-image-3"><a href="#"><div class="banner-copy left"><span class="header">Consumer unit upgrades<br></span>
        <br>Lorem ipsum dolor sit amet, utamur detraxit an eam. Facer exerci similique an sit, erat aeque fastidii eam no, id duo ferri appellantur delicatissimi. Ius eros minimum an.
        <br><br><strong>Find out more ></strong></div></a></li>
        <li class="banner-image banner-image-1"><a href="#"><div class="banner-copy right"><span class="header">Lighting updates<br></span>
        <br> i.e down lights, led lighting and security lighting Lorem ipsum dolor sit amet, utamur detraxit an eam. Facer exerci similique an sit, erat aeque fastidii eam no, id duo ferri appellantur delicatissimi. Ius eros minimum an.
        <br><br><strong>Click for more info ></strong></div></a></li>
        <li class="banner-image banner-image-5"><a href="#"><div class="banner-copy left"><span class="header">Energy saving upgrades<br></span>
        <br>Lorem ipsum dolor sit amet, utamur detraxit an eam. Facer exerci similique an sit, erat aeque fastidii eam no, id duo ferri appellantur delicatissimi. Ius eros minimum an.
        <br><br><strong>More here ></strong></div></a></li>
    </ul>
</div>


<div class="page-content">
    
</div>

<script type="text/javascript" src="{{ URL::asset('js/unslider.js') }}"></script>
<script>$(function() { $('.banner').unslider({ autoplay: true, delay: 7000 }) })</script>

@stop