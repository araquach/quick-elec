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
            
            
            <div id="nav">
            <ul class="list--inline">
            	<li><a href="#"></a>Link 1</li>
            	<li><a href="#"></a>Link 2</li>
            	<li><a href="#"></a>Link 3</li>
            	<li><a href="#"></a>Link 4</li>
            	<li><a href="#"></a>Link 5</li>
            	<li><a href="#"></a>Link 6</li>
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