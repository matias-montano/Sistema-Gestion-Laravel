<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand btn btn-primary" href="{{ route('main') }}">Ir a Inicio</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            @auth('employee')
                <li class="nav-item">
                    <span class="nav-link text-white font-weight-bold">Logged in as: {{ Auth::guard('employee')->user()->name }}</span>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('employee.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="nav-link" href="{{ route('employee.logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>
            @endauth
            @guest('employee')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employee.login') }}">Login</a>
                </li>
            @endguest
        </ul>
    </div>
</nav>