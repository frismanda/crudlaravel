<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/home') }}">
                {{ config('app.name', 'CRUD') }}
            </a>

        </div>


        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
                <li><a href="{{ url('/home') }}">Teras</a></li>

                @if (!Auth::guest())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Artikel <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('articles/create') }}">Buat Artikel</a></li>
                        <li><a href="{{ url('articles') }}">List Artikel</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('datatable') }}">List Artikel dengan Datatables hehe</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pengaturan <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('users') }}">List User</a></li>
                        <!-- <li class="divider"></li>
                        <li><a href="{{ url('settings') }}">Other Settings</a></li> -->
                    </ul>
                </li>
                @endif

                <li><a href="{{ url('/about') }}">Tentang</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Masuk</a></li>
                <li><a href="{{ url('/register') }}">Daftar</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->username }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/profile') }}">Edit Profil</a></li>
                        <li><a href="{{ url('/password') }}">Ubah password</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
