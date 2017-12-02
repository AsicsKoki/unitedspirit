<header>
    <div class="navbar-wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="#">United Spirit</a>
                    <img class="navbar-image" src="http://www.freeiconspng.com/uploads/res-light-purple-flowers-png-by-hanabell1-d6l6mwr-png-16.png" alt="">
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">Our Experts</a></li>
                        <li><a href="#about">Campus Box</a></li>
                        <li><a href="#about">Donate</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <!-- Authentication Links -->
                        @guest
                        <li><a href="{{ route('getUserLogin') }}">Login</a></li>
                        <li><a href="{{ route('getUserRegister') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
    </div>
</header>