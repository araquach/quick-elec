<!DOCTYPE html>
<html>

    @section('head')
    
    @show
    
    <body>
        <div container>
            
            <header>
                <div id="header-content">
                    <h1>Quick Elec</h1>
                </div>
                
                
                <a href="#"><div class="social facebook"></div></a>
                <a href="#"><div class="social twitter"></div></a>
                
                <a href="{{ URL::to('contact') }}">
                    <button id="contact-us" class="button--pill">Contact Us</button>
                </a>
                <div id="nav">
                    <ul class="list--inline">
                        <li>{!! link_to('/', 'Home') !!}</li>
                        <li>{!! link_to('about', 'About Us') !!}</li>
                    	<li>{!! link_to('contact', 'Contact') !!}</li>
                    	<li>{!! link_to('testimonials', 'Testimonials') !!}</li>
                    </ul>
                </div>
            </header>
            
                @yield('content')
        
            <footer>
                <p>© 2016 Copyright Quick-Elec. All rights reserved. Site by Contra Design</p>
                <p>Facebook/Twitter</p>
            </footer>
        </div>
    </body>
</html>