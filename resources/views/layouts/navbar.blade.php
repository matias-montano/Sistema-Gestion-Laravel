<nav class="p-3" style="background-color: #141c24 ; margin-top: -55px;">
    <div class="container mx-auto flex justify-between items-center" style="background-color: #141c24;">
        <!-- Enlace de Inicio --> 
        <div class="flex items-center gap-4 border border-blue-500 rounded-lg p-2" style="background-color: #040405; border-color: #10488e;">
            <a href="{{ route('main') }}" class="flex items-center gap-4 hover:opacity-80 transition-opacity">
                <img src="{{ asset('images/miniLogoProyecto.png') }}" alt="Inicio" class="w-13 h-8 rounded-full" style="margin-bottom: 0;">
            </a>
        </div>

        <div class="flex items-center gap-4">
            @auth('employee')
                <div class="relative border border-gray-700 rounded-lg p-2" style="background-color: #040405;">
                    <button class="flex items-center gap-2 text-white group" id="user-menu-button">
                        <img class="w-8 h-8 rounded-full transform transition-transform duration-300 hover:scale-110" src="{{ asset('images/thisPersonNoExist.jpg') }}" alt="Avatar" style="margin-bottom: 0;">
                        <span class="font-medium">{{ Auth::guard('employee')->user()->name }}</span>
                        <svg class="w-4 h-4 transition-transform group-aria-expanded:rotate-180" 
                             fill="none" 
                             stroke="currentColor" 
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2" 
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden absolute right-0 mt-2 w-48 bg-gray-800 rounded-md shadow-lg py-1 z-20 border border-white group-hover:block" id="user-menu">
                        <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-white border-b border-white hover:bg-[#4a5568] hover:brightness">Mi Perfil</a>
                        <form id="logout-form" action="{{ route('employee.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="{{ route('employee.logout') }}" class="block px-4 py-2 text-white border-t border-white hover:bg-[#4a5568] hover:brightness"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar Sesión
                        </a>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</nav>

<script>
    document.getElementById('user-menu-button').addEventListener('click', function(event) {
        event.stopPropagation();
        var menu = document.getElementById('user-menu');
        menu.classList.toggle('hidden');
    });

    document.addEventListener('click', function(event) {
        var menu = document.getElementById('user-menu');
        if (!menu.classList.contains('hidden') && !menu.contains(event.target) && event.target.id !== 'user-menu-button') {
            menu.classList.add('hidden');
        }
    });
</script>