<nav class="navbar navbar-expand-lg navbar-dark" style="font-family:'Nunito', sans-serif; background-color: rgb(32,161,241);">
  <a class="navbar-brand text-bold" href="/">Home
        </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
     <ul class="navbar-nav ml-auto text-white">

    <li class="nav-item">
            <a class="nav-link  text-white" href="{{route('userHotel')}}">Hotel</a></li>

          <li class="nav-item">
            <a class="nav-link  text-white" href="{{route('userFood')}}">Food</a></li>
              
          <li class="nav-item">
            <a class="nav-link  text-white" href="{{route('userEvent')}}">Events</a></li>
              
              <li class="nav-item">
            <a class="nav-link  text-white" href="{{route('userProduct')}}">Products</a></li>                   
     </ul>


  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
   <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                       


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{  Auth::user()->name }}<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item bg-dark text-white" href="{{route('myBooking')}}"
                                       onclick="event.preventDefault();
                                       document.getElementById('myBooking').submit();">
                                        {{ __('My Bookings') }}
                                    </a>
                                    <a class="dropdown-item bg-dark text-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                     <form id="myBooking" action="{{ route('myBooking') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> 
                            
  <!-- Links -->
  
                        @endguest
                    </ul>
  </div>
</nav>
