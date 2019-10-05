<!-- Header section -->
<div style="height:10px; width:100%; background-color:yellow; position:absolute; top:90px;" id='yellow-line'></div>

<header class="header-section">	

    <hr class="colored" style="margin-bottom: -8px;

        bottom: 0px;"/>

    <div class="logo">

        <img src="{{ asset('img/logo.png')}}" height="80" alt=""><!-- Logo -->

    </div>

    <!-- Navigation -->

    <div class="responsive"><i class="fa fa-bars"></i></div>

    
    <nav>
    <nav class="navbar navbar-static-top">

        <div class="container">


            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" href="#navbar">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                </div>
                @guest
                
                <nav id="navbar" class="collapse navbar-collapse">
               
                <ul class="nav navbar-nav text-uppercase" style="right: 0;">

                    <!-- Authentication Links -->

                    <li><a href="/"><i class="fas fa-home"></i>Home</a></li>

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#"><i class="far fa-flag"></i> Organization<span class="caret"></span></a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="/committee">COMMITTEES</a></li>

                                <li><a class="dropdown-item" href="/meetings">Exec. Com Meeting Minutes</a></li>

                                <li><a class="dropdown-item" href="/bylaws">CONSTITUTION AND BYLAWS</a></li>

                                <li><a class="dropdown-item" href="/about">ABOUT APPNA</a></li>

                            </ul>

                        </li>

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#"><i class="fas fa-users"></i> Members<span class="caret"></span></a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/register">JOIN APPNA OKLAHOMA</a></li>
                                <li><a class="dropdown-item" href="/login">MEMBER LOGIN</a></li>
                                <li><a class="dropdown-item" href="/directory">MEMBER Directory</a></li>

                                <li><a class="dropdown-item" href="https://www.instantreg.com/appnatemplate2/appna-membership">JOIN APPNA NATIONAL</a></li>

                            </ul>

                        </li>

                        <li><a href="/events"><i class="far fa-calendar-alt"></i> Events</a></li>

                        <li><a href="/elections"><i class="far fa-hand-paper"></i> Elections</a></li>

                        <li><a href="/gallery"><i class="far fa-images"></i> Gallery</a></li>

                        <li><a href="/contact"><i class="fas fa-location-arrow"></i> Contact</a></li>

                </ul>
                @else
                 <nav id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav text-uppercase" style="right: 0;">

                    <!-- Authentication Links -->

                    <li><a href="/"> <i class="fas fa-home"></i> Home</a></li>

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#"><i class="far fa-flag"></i> Organization<span class="caret"></span></a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="/committee">COMMITTEES</a></li>

                                <li><a class="dropdown-item" href="/meetings">Exec. Com Meeting Minutes</a></li>

                                <li><a class="dropdown-item" href="/bylaws">CONSTITUTION AND BYLAWS</a></li>

                                <li><a class="dropdown-item" href="/about">ABOUT APPNA</a></li>

                            </ul>

                        </li>

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#"><i class="fas fa-users"></i> Members<span class="caret"></span></a>

<ul class="dropdown-menu">
<li><a class="dropdown-item" href="https://www.instantreg.com/appnatemplate2/appna-membership">JOIN APPNA NATIONAL</a></li>

    <li><a class="dropdown-item" href="/directory">MEMBER Directory</a></li>


</ul>

</li>

                        <li><a href="/events"><i class="far fa-calendar-alt"></i> Events</a></li>

                        <li><a href="/elections"><i class="far fa-hand-paper"></i> Elections</a></li>

                        <li><a href="/gallery"><i class="far fa-images"></i> Gallery</a></li>

                        <li><a href="/contact"><i class="fas fa-location-arrow"></i> Contact</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#"><i class="fas fa-user"></i> {{ Auth::user()->fname }}<span class="caret"></span></a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="/home">MY ACCOUNT</a></li>

                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                LOGOUT</a> <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
    {{ csrf_field() }}
</form>
</li>
                            </ul>

                        </li>

                </ul>
            </nav>
                @endguest
            </nav>
            </nav><!--/.nav-collapse -->

        </div>

    </nav>

</header>

<!-- Header section end -->

