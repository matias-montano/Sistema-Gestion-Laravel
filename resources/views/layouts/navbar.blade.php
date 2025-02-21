<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a class="btn btn-primary" href="{{ route('main') }}">Ir a Inicio</a>
        <div class="flex items-center space-x-4">
            @auth('employee')
                <span class="text-white font-semibold">Logged in as: {{ Auth::guard('employee')->user()->name }}</span>
                <form id="logout-form" action="{{ route('employee.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="text-white hover:text-gray-400" href="{{ route('employee.logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
            @endauth
            @guest('employee')
                <a class="text-white hover:text-gray-400" href="{{ route('employee.login') }}">Login</a>
            @endguest
        </div>
    </div>
</nav>