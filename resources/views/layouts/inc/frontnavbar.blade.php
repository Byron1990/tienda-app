<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{url('/') }}">Tienda en linea</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('category')}}">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                    @guest
                    @if(Route::has('login')){
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    }
                    @endif
                    @if(Route::has('register')){
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    }
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} 
                        </a>
                        <ul class="dropdown-menu" arial-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    Mi Perfíl
                                </a>
                            </li>
                            <li>
                                <a href="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.location.reload();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{route('logout')}}" method="post" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </ul>
                {{-- @guest
                    @if(Route::has('login')){
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    }
                    @endif
                    @if(Route::has('register')){
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    }
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} 
                        </a>
                        <ul class="dropdown-menu" arial-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    Mi Perfíl
                                </a>
                            </li>
                            <li>
                                <a href="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.location.reload();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{route('logout')}}" method="post" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
        </div>
    </div> --}}
</nav>