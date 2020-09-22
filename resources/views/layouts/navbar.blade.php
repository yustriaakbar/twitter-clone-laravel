<nav class="navbar fixed-top">
    <div class="container">
        <ul>
            <a href="{{url('/')}}">
                <li class="{{Request::is('home') ? 'active' : ''}}">
                    <i class="{{Request::is('home') ? 'fa fa-home' : 'fab fa-twitter'}}"></i>
                    <span class="d-lg-inline-block d-xs-none d-sm-none">Home</span>
                </li>
            </a>
            @guest
                <a href="{{route('about')}}" class="d-lg-inline-block d-xs-none d-sm-none">
                    <li>
                        <span>About</span>
                    </li>
                </a>
            @endguest

            @auth

                <!-- Notifications -->
                <a href="">
                    <li class="{{Request::is('notifications*') ? 'active' : ''}}">
                        <i class="fa fa-bell"></i>
                        <span class="d-lg-inline-block d-xs-none d-sm-none">Notifications</span>
                    </li>
                </a> 

                <!-- Messages -->
                <a href="">
                    <li class="{{Request::is('messages*') ? 'active' : ''}}">
                        <i class="fa fa-envelope"></i>
                        <span class="d-lg-inline-block d-xs-none d-sm-none">Messages</span>
                    </li>
                </a>



            @endauth
        </ul>

        <a href="{{ url('/') }}"> <span class="visuallyhidden" style="display: inline-block; width: 24px; height: 21px;"  >
            <img src="{{ asset('images/bird.svg') }}"  alt="Twitter">
           </span>
            </a>

        @auth
            <div class="form-inline my-2 my-lg-0 navbar-form d-xs-none d-sm-none d-md-flex">
                <form action="{{url('/search/')}}" method="GET">
                    <div class="input-group">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search Twitter" name="search" value="{{Request::get('search')}}">
                        <div class="input-group-btn">
                            <button class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>

            <ul>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <li>
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="d-lg-inline-block d-xs-none d-sm-none">{{ __('Logout') }}</span>
                    </li>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                     @csrf
                </form>
            </ul>
           </div>
        @endauth
    </div>
</nav>
