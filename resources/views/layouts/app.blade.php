<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/default.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
<!--                        {{ config('app.name', 'Laravel') }}-->
                   Мама Шарит
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li class="contactInfo">
                        	<p>Техподдержка:
                        	<a href="tel:+7(495)2420789">+7 (495) 242 07 89</a> |
                        	<a href="mailto:support@mamasharit.ru">support@mamasharit.ru</a>
                        	</p>
                        </li>
                        <li>
                        <div class="socialLinks">
                       	<div class="icon-holder">
                       		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 89.758 89.758" style="enable-background:new 0 0 89.758 89.758;" xml:space="preserve">
<g>
	<path style="fill:#e13d62;" d="M58.255,23.88H31.503c-4.27,0-7.744,3.474-7.744,7.744v26.752c0,4.27,3.474,7.745,7.744,7.745
		h26.752c4.27,0,7.745-3.474,7.745-7.745V31.624C66,27.354,62.526,23.88,58.255,23.88z M44.879,58.906
		c-7.667,0-13.905-6.238-13.905-13.906c0-7.667,6.238-13.905,13.905-13.905c7.668,0,13.906,6.238,13.906,13.905
		C58.785,52.667,52.546,58.906,44.879,58.906z M59.232,33.97c-1.815,0-3.291-1.476-3.291-3.29c0-1.814,1.476-3.29,3.291-3.29
		c1.814,0,3.29,1.476,3.29,3.29C62.522,32.494,61.046,33.97,59.232,33.97z"/>
	<path style="fill:#e13d62;" d="M44.879,36.971c-4.426,0-8.03,3.602-8.03,8.028c0,4.428,3.604,8.031,8.03,8.031
		c4.428,0,8.029-3.603,8.029-8.031C52.908,40.574,49.306,36.971,44.879,36.971z"/>
	<path style="fill:#e13d62;" d="M44.879,0C20.094,0,0,20.094,0,44.879c0,24.785,20.094,44.879,44.879,44.879
		c24.785,0,44.879-20.094,44.879-44.879C89.758,20.094,69.664,0,44.879,0z M71.875,58.376c0,7.511-6.109,13.62-13.62,13.62H31.503
		c-7.51,0-13.62-6.109-13.62-13.62V31.624c0-7.51,6.11-13.62,13.62-13.62h26.752c7.511,0,13.62,6.11,13.62,13.62V58.376z"/>
</g>
</svg>
                       	</div>
                       	<div class="icon-holder">
                       		<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve">
<g>
	<g>
		<circle id="XMLID_11_" style="fill:#4D76A1;" cx="56.098" cy="56.098" r="56.098"/>
	</g>
	<path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M53.979,80.702h4.403c0,0,1.33-0.146,2.009-0.878
		c0.625-0.672,0.605-1.934,0.605-1.934s-0.086-5.908,2.656-6.778c2.703-0.857,6.174,5.71,9.853,8.235
		c2.782,1.911,4.896,1.492,4.896,1.492l9.837-0.137c0,0,5.146-0.317,2.706-4.363c-0.2-0.331-1.421-2.993-7.314-8.463
		c-6.168-5.725-5.342-4.799,2.088-14.702c4.525-6.031,6.334-9.713,5.769-11.29c-0.539-1.502-3.867-1.105-3.867-1.105l-11.076,0.069
		c0,0-0.821-0.112-1.43,0.252c-0.595,0.357-0.978,1.189-0.978,1.189s-1.753,4.667-4.091,8.636c-4.932,8.375-6.904,8.817-7.71,8.297
		c-1.875-1.212-1.407-4.869-1.407-7.467c0-8.116,1.231-11.5-2.397-12.376c-1.204-0.291-2.09-0.483-5.169-0.514
		c-3.952-0.041-7.297,0.012-9.191,0.94c-1.26,0.617-2.232,1.992-1.64,2.071c0.732,0.098,2.39,0.447,3.269,1.644
		c1.135,1.544,1.095,5.012,1.095,5.012s0.652,9.554-1.523,10.741c-1.493,0.814-3.541-0.848-7.938-8.446
		c-2.253-3.892-3.954-8.194-3.954-8.194s-0.328-0.804-0.913-1.234c-0.71-0.521-1.702-0.687-1.702-0.687l-10.525,0.069
		c0,0-1.58,0.044-2.16,0.731c-0.516,0.611-0.041,1.875-0.041,1.875s8.24,19.278,17.57,28.993
		C44.264,81.287,53.979,80.702,53.979,80.702L53.979,80.702z"/>
</g>
</svg>
                       	</div>
                       	<div class="icon-holder">
                       		<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve">
<g>
	<circle style="fill:#3B5998;" cx="56.098" cy="56.098" r="56.098"/>
	<path style="fill:#FFFFFF;" d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34
		c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z"/>
</g>
</svg>
                       	</div>
													</div></li>
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                   <img src="/img/profile-ph-circle.png"/> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
