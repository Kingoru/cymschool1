<x-app-layout>
    <section class="bg-cover"style="background-image: url({{asset('img/cursos/Programacion.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-48">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="font-bold text-4xl text-white">La Academia de CyM</h1>
                <p class="text-lg mt-2 mb-4 text-white">Un lugar para cultivar el conocimiento</p>

                <!-- Buscador -->
                @livewire('search')
            </div>
        </div>
    </section>
    @livewire('course-index')
</x-app-layout>