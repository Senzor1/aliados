<x-app-layout>
    {{-- Portada --}}
    <section class="bg-cover" style="background-image:  url({{asset('img/cursos/portada.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36 ">
            <div class="w-full md:w-3/4 lg:w-1/2 bg-black bg-opacity-50">
                <h1 class="text-white font-fold text-6xl">Diversos cursos para Diversas marcas</h1>
                <p class="text-white text-lg mt-2 mb-2">Encuentra cursos para tu marca favorita y para el uso de las mejores herramientas</p>
                <!-- buscador -->
                @livewire('search')
            </div>
        </div>
    </section>


    @livewire('courses-index')
</x-app-layout>