<nav class="bg-gray-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a class="text-lg font-semibold" href="{{ url('/') }}">Mi Aplicación</a>

        <button class="lg:hidden text-white focus:outline-none" onclick="toggleMenu()">☰</button>

        <div class="hidden lg:flex items-center space-x-4" id="navbarMenu">
            <a class="hover:text-gray-300" href="{{ route('dashboard') }}">Departamentos</a>
            <a class="hover:text-gray-300" href="{{ route('edificios.gestionEdificios') }}">Edificios</a>
            <a class="hover:text-gray-300" href="{{ route('departamentos.asociar-edificio', 1) }}">Asociar Edificio</a>

            @auth
                <div class="flex items-center space-x-2">
                    <span class="hover:text-gray-300">{{ auth()->user()->nombre }} {{ auth()->user()->apellidos }}</span>
                    <a class="hover:text-gray-300 cursor-pointer" onclick="document.getElementById('logout-form').submit();">Cerrar sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            @endauth
        </div>
    </div>
</nav>

