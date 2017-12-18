<header>
    <div class="navbar-wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container cf">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="{{ URL::to('/')}}">
                        <img src="{{ URL::to('/')}}/img/logo.png" alt="self realization">
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                    
                        <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ URL::to('/') }}">Home</a></li>
                        @if(Request::is('home'))
                        <li><a href="#experts">Nos experts</a></li>
                        <li><a href="#donations">Faire un don</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="{{ route('getSubscriptions') }}">Inscription</a></li>
                        <li><a href="{{ route('getMyCampus') }}">Campus Box</a></li>
                        @else
                        <li><a href="{{ URL::to('/home') }}#experts">Nos experts</a></li>
                        <li><a href="{{ URL::to('/home') }}#donations">Faire un don</a></li>
                        <li><a href="{{ URL::to('/home') }}#contact">Contact</a></li>
                        <li class="{{ Request::is('subscriptions') ? 'active' : '' }}"><a href="{{ route('getSubscriptions') }}">Inscription</a></li>
                        <li class="{{ Request::is('mycampus') ? 'active' : '' }}"><a href="{{ route('getMyCampus') }}">Campus Box</a></li>
                        @endif
                        <!-- <li class="active"><a href="{{ URL::to('/')}}">Home</a></li>
                        @if(Request::is('home'))
                         <li><a href="#experts">Our Experts</a></li>
                        @endif
                        <li><a href="{{ route('getMyCampus') }}">Campus Box</a></li>
                        @if(Request::is('home'))
                        <li><a href="#donations">Donate</a></li>
                        <li><a href="#contact">Contact</a></li>
                        @endif -->
                        <!-- Authentication Links -->
                        @guest
                        <li class="{{ Request::is('userLogin') ? 'active' : '' }}"><a href="{{ route('getUserLogin') }}">S'identifier</a></li>
                        <li class="{{ Request::is('userRegister') ? 'active' : '' }}"><a href="{{ route('getUserRegister') }}">Registre</a></li>
                        @else
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   {{ ucfirst(Auth::user()->first_name) }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                    <li><a href="{{ route('getChangePassword') }}">Changer le mot de passe</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     Connectez - Out
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