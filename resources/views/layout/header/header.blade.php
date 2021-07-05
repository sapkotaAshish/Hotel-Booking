
    <header class="header dark-bg" style="background:linear-gradient(90deg, #4ca1af 0%, #3499eb 43%, #19547b 100%);">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <a href="index.html" class="logo" style="color:white;">Mgmt. <span  style="color:orange;">HOTEL</span></a>

      <div class="top-nav notification-row">
        <ul class="nav pull-right top-menu">        
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="/img/avatar1_small.jpg">
                            </span>
                            <span class="username" style="color:white;"> {{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
            
              <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                  <i class="icon_key_alt"></i> {{ __('Logout') }}
                                    </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

              </li>
            
            </ul>
          </li>
        </ul>
      </div>
    </header>

                     