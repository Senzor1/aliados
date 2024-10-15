<x-app-layout>

    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
      <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
        <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
          <polygon points="50,0 100,0 50,100 0,100" />
        </svg>
  
       <div> 
          <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
          </div>
        </div>
  
        <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
          <div class="sm:text-center lg:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
              <span class="block xl:inline">Aprende con nosotros en</span>
              <span class="block text-red-600 xl:inline">Senzoracademy</span>
            </h1>
            
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="{{route('courses.index')}}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-red-700 bg-gray-100 hover:bg-red-200 md:py-4 md:text-lg md:px-10">Cursos virtuales</a>
              </div>
            </div>
            <!-- buscador -->
            @livewire('search')
          </div>
        </main>
      </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
      <img class="h-56 w-full object-fill sm:h-72 md:h-96 lg:w-full lg:h-full" style="background-image: url({{asset('img/home/Academy-index.jpg')}})" alt="">
    </div>
  </div>
  


    <section class="mt-24">
        <h2 class="text-center text-3xl text-gray-600">Ultimas capacitaciones!</h2>
        <p class="text-center text-gray-500 text-sm mb-6">Aqui encontraras nuestros ultimos cursos!</p>

        <div class=" mb-2.5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-8 ">
            @foreach ($courses as $course)
                <x-course-card :course="$course"/>
            @endforeach
        </div>
    </section>


</x-app-layout>

