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
              <div class="rounded-md shadow">
                <a href="{{route('cursos-presenciales')}}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black md:py-4 md:text-lg md:px-10"> Cursos Presenciales </a>
                
              </div>
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
  
  
    <section class="mt-7 bg-gray-700">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <article class=" mt-4 mb-4 col-span-2">
                           
                <div class="py-12 bg-white rounded-2xl">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h2 class="text-base text-red-600 font-semibold tracking-wide uppercase">Sobre nosotros</h2>
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Capacítate con nosotros</p>
                        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">En <b>Senzor Academy</b> podrás encontrar diversos cursos para mejorar tu desempeño laboral</p>


                    </div>
                
                    <div class="mt-10">
                        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <div class="relative">
                            <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-red-500 text-white">
                                <!-- Heroicon name: outline/globe-alt -->
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Compromiso</p>
                            </dt>
                        </div>
                
                        <div class="relative">
                            <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-black text-white">
                                <!-- Heroicon name: outline/scale -->
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Confianza</p>
                            </dt>
                        </div>
                
                        <div class="relative">
                            <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-black text-white">
                                <!-- Heroicon name: outline/lightning-bolt -->
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mejoramiento Continuo</p>
                            </dt>
                        </div>
                
                        <div class="relative">
                            <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-red-500 text-white">
                                <!-- Heroicon name: outline/annotation -->
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Adaptabilidad</p>
                            </dt>
                        </div>
                        </dl>
                    </div>
                    </div>
                </div>
            </article>

            <article class="lg:mt-4 lg:mb-4 rounded-2xl col-span-1 sm:mt-2 sm:mb-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18915.027167066168!2d-74.1101473648834!3d4.701308982139135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b913d314523%3A0xdeb8c79e424d3d8e!2sSenzor%20Academy!5e0!3m2!1ses!2sco!4v1645734806094!5m2!1ses!2sco" width="400" height="350" style="border-radius: 20px;" allowfullscreen="" loading="lazy"></iframe>

                 {{-- Iconos redes --}}
                <div>
                    <div class="flex flex-col p-1 m-1 bg-green-600 shadow-md rounded-2xl">
                        <a href="https://wa.link/4rgr44" target="_blank">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg viewBox="0 0 448 512 " class="w-8 h-8 rounded-2xl p-1">
                                        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                    </svg>
                                    <div class="flex flex-col ml-1">
                                        <div class="font-medium leading-none text-white ">+57 350 336 3439</div>
                                    </div>
                                </div>
                        
                        
                            </div>
                        </a>
                    </div>
                    <div class="flex flex-col p-1 m-1 bg-blue-600 shadow-md rounded-2xl">
                        <a href="https://www.facebook.com/senzorcolombia" target="_blank">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg viewBox="0 0 448 512 " class="w-8 h-8 rounded-2xl p-1">
                                        <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
                                    </svg>
                                    <div class="flex flex-col ml-1">
                                        <div class="font-medium leading-none text-gray-100">Senzor Colombia</div>
                                    </div>
                                </div>
                            
                            </div>
                        </a>
                    </div>
                    
                    <div class="flex flex-col p-1 m-1 bg-gradient-to-r from-yellow-500 via-pink-500 to-blue-500 shadow-md rounded-2xl">
                        <a href="https://www.instagram.com/senzor._" target="_blank">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512 " class="w-8 h-8 rounded-2xl p-1">
                                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                                    </svg>
                                    <div class="flex flex-col ml-1">
                                        <div class="font-medium leading-none text-gray-100">instagram.com/senzor._</div>
                                    </div>
                                </div>
                            
                            </div>
                        </a>
                    </div>
                </div>
                 {{-- Fin iconos redes --}}
            </article>
        </div>
    </section>


    <section class="mt-24">
        <h2 class="text-center text-3xl text-gray-600">Ultimos cursos!</h2>
        <p class="text-center text-gray-500 text-sm mb-6">Aqui encontraras nuestros ultimos cursos!</p>

        <div class=" mb-2.5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-8 ">
            @foreach ($courses as $course)
                <x-course-card :course="$course"/>
            @endforeach
        </div>
    </section>


</x-app-layout>

