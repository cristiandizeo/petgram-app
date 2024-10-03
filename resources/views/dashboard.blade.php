@extends('layouts.app')

@section('titulo')
    Tu cuenta
@endsection

@section('contenido')
<body class="bg-gray-100">
    <!-- Cabecera -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <h1 class="text-2xl font-bold">Petgram</h1>
            <nav class="space-x-4 hidden sm:flex">
                <a href="#" class="text-gray-600 hover:text-gray-800">Perfil</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">Mis mascotas</a>
                <a href="#" class="text-red-600 hover:text-red-800">Logout</a>
            </nav>
            <div class="sm:hidden">
                <button id="mobileMenuToggle" class="text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menú móvil -->
        <div id="mobileMenu" class="hidden sm:hidden bg-white shadow-md">
            <nav class="p-4 space-y-4">
                <a href="#" class="block text-gray-600 hover:text-gray-800">Perfil</a>
                <a href="#" class="block text-gray-600 hover:text-gray-800">Mis mascotas</a>
                <a href="#" class="block text-red-600 hover:text-red-800">Logout</a>
            </nav>
        </div>
    </header>

    <!-- Contenido Principal -->
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6 py-6 px-4">
        <!-- Barra lateral izquierda (Opciones) -->
        <aside class="lg:col-span-3 bg-white p-4 shadow-md hidden lg:block">
            <ul class="space-y-4">
                <li><a href="#" class="text-gray-600 hover:text-gray-800 block">Mis mascotas</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-800 block">Reportar mascota perdida</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-800 block">Reportar mascota encontrada</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-800 block">Mapa de mascotas perdidas</a></li>
            </ul>
        </aside>

        <!-- Muro principal (Publicaciones) -->
        <main class="lg:col-span-6 bg-white shadow-md p-6 rounded-lg">
            <!-- Dropdown para ordenar publicaciones -->
            <div class="mb-4">
                <label for="order" class="block text-gray-700 font-medium">Ordenar publicaciones por:</label>
                <select id="order" class="mt-2 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                    <option value="recent">Más recientes</option>
                    <option value="nearby">Más cercanos</option>
                    <option value="popular">Más populares</option>
                </select>
            </div>

            <!-- Publicaciones -->
            <div class="flex flex-col items-center justify-center w-full p-4 space-y-4 overflow-y-auto">
                <!-- Publicación 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden w-full max-w-md">
                    <img class="w-full h-64 object-cover" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Dalmatien.jpg/320px-Dalmatien.jpg" alt="Dalmatian Dog">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold">Dalmatian perdido</h2>
                        <p class="text-gray-700">Visto por última vez en el parque central.</p>
                        <div class="mt-4 flex space-x-2">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ver mapa</button>
                            <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Lo vi</button>
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Contactar</button>
                        </div>
                    </div>
                </div>
            
                <!-- Publicación 2 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden w-full max-w-md">
                    <img class="w-full h-64 object-cover" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Cat_November_2010-1a.jpg/220px-Cat_November_2010-1a.jpg" alt="Gato Naranja">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold">Gato naranja encontrado</h2>
                        <p class="text-gray-700">Fue encontrado cerca del mercado del barrio.</p>
                        <div class="mt-4 flex space-x-2">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ver mapa</button>
                            <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Es mío</button>
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Contactar</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </main>

        <!-- Barra lateral derecha (Anuncios) -->
        <aside class="lg:col-span-3 bg-white p-4 shadow-md hidden lg:block rounded-lg">
            <h3 class="text-lg font-semibold mb-4">Anuncios</h3>
            <div class="space-y-4">
                <!-- Anuncio 1 -->
                <div class="bg-gray-200 p-4 rounded-lg shadow-md">
                    <h4 class="font-bold">Veterinaria ABC</h4>
                    <p class="text-sm text-gray-600">Consulta a nuestros especialistas. ¡Primer control gratis!</p>
                </div>
                <!-- Anuncio 2 -->
                <div class="bg-gray-200 p-4 rounded-lg shadow-md">
                    <h4 class="font-bold">Adopta una mascota</h4>
                    <p class="text-sm text-gray-600">Encuentra a tu nuevo mejor amigo en el refugio más cercano.</p>
                </div>
            </div>
        </aside>
    </div>

    <!-- Barra lateral móvil (fija en la parte inferior) -->
    <nav class="fixed bottom-0 left-0 right-0 bg-white shadow-md block lg:hidden">
        <ul class="flex justify-around p-3">
            <li><a href="#" class="text-gray-600 hover:text-gray-800">Mis mascotas</a></li>
            <li><a href="#" class="text-gray-600 hover:text-gray-800">Reportar perdida</a></li>
            <li><a href="#" class="text-gray-600 hover:text-gray-800">Mapa</a></li>
            <li><a href="#" class="text-red-600 hover:text-red-800">Logout</a></li>
        </ul>
    </nav>

    <script>
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        
        mobileMenuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
@endsection
@section('layouts.footer')
@endsection