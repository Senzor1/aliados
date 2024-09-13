<x-app-layout>
<!-- oculto 26/03/2024 heidy -->
<body>
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">Curso de Vehículos Eléctricos (Motocicleta, Bicicleta y Patinetas)</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Aprende todo lo que tienes que saber sobre Vehículos Eléctricos Con nosotros de manera <span class="font-extrabold">totalmente presencial</span></p>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-red-700 hover:bg-black focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                    Inicia Ahora!
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{asset('img/presenciales/vehiculos-electricos/portada-ve.png')}}" alt="mockup">
            </div>                
        </div>
    </section>

    <section class="relative  bg-white">
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
                <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url({{asset('img/presenciales/vehiculos-electricos/hero-ve.png')}});">
                  <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
                </div>
                <div class="container relative mx-auto">
                  <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                      <div class="pr-12">
                        <h1 class="text-white font-semibold text-5xl">
                          ¿Que lograrás con este curso?
                        </h1>
                        <p class="mt-4 text-lg text-white">
                          Los beneficios de tomar este curso con nosotros son:
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
                  <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                  </svg>
                </div>
        </div>
        <section class="pb-10 bg-blueGray-200 -mt-24">
                <div class="container mx-auto px-4">
                  <div class="flex flex-wrap grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    
                    <div class="w-full px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                          <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                              <i class="fas fa-clock"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Duración</h6>
                            <p class="mt-2 mb-4 text-blueGray-500 text-5xl font-extrabold">
                                40 Horas
                            </p>
                          </div>
                        </div>
                      </div>
                      
                    <div class="w-full px-4 text-center">
                      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                          <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                            <i class="fas fa-award"></i>
                          </div>
                          <h6 class="text-xl font-semibold">Mejor Diagnostico</h6>
                          <p class="mt-2 mb-4 text-blueGray-500">
                            Aprenderás el funcionamiento de los sistemas de la motocicleta y de esta manera lograr diagnosticar y reparar correctamente
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="w-full px-4 text-center">
                      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                          <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                            <i class="fas fa-award"></i>
                          </div>
                          <h6 class="text-xl font-semibold">Totalmente Precensial</h6>
                          <p class="mt-2 mb-4 text-blueGray-500">
                            En nuestras clases presenciales podras interactuar
                            con mas gente que comparte este interes por las motocicletas
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class=" w-full px-4 text-center">
                      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                          <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                            <i class="fas fa-award"></i>
                          </div>
                          <h6 class="text-xl font-semibold">Informacion a la mano</h6>
                          <p class="mt-2 mb-4 text-blueGray-500">
                            Recibirás acceso a material de apoyo, herramienta y equipos especializados para realizar cada una de tus prácticas.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
        </section>
    </section>
    <h2 class="text-4xl font-extrabold bg-white text-gray-900 text-center dark:text-white">¿Que veremos en el curso?</h2>
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h3 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Introducción a los Vehículos Eléctricos</h2>
                <div>
                    <ul class="px-2" style="list-style-type: circle;">
                        <li>Nuevas Fuentes de Energía</li>
                        <li>Historia de las Motos Eléctricas</li>
                        <li>Componentes de las Motos Eléctricas</li>
                        <li>Ventajas y Desventajas de las Motos Eléctricas</li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/introduccion-a-los-vehiculos-electricos/introduccion1.png')}}" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/introduccion-a-los-vehiculos-electricos/introduccion2.png')}}" alt="office content 2">
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/introduccion-a-la-electronica/intro-elec-1.png')}}" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/introduccion-a-la-electronica/intro-elec-2.png')}}" alt="office content 2">
            </div>
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h3 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Introducción A La Electrónica</h2>
                <ul class="px-2" style="list-style-type: circle;">
                    <li>Concepto, Materia, Átomo, Corrientes Eléctricas (Definición y Señal)</li>
                    <li>Corriente Alterna</li>
                    <li>Corriente Directa</li>
                    <li>Voltaje</li>
                    <li>Resistencia</li>
                    <li>Conductividad</li>
                    <li>Bobinas</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
      <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
          <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
              <h3 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Herramientas Especializadas de Diagnóstico</h2>
              <div>
                  <ul class="px-2" style="list-style-type: circle;">
                    <li>Uso del Multímetro</li>
                    <li>Uso de Probador de Motores</li>
                    <li>Uso de Probador de Controladores</li>
                    <li>Uso de Probador de Accesorios Eléctricos</li>
                    <li>Uso de Medidor de Baterías</li>
                  </ul>
              </div>
          </div>
          <div class="grid grid-cols-2 gap-4 mt-8">
              <img class="w-full rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/herramientas-especializadas-de-diagnostico/herramientas1.png')}}" alt="office content 1">
              <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/herramientas-especializadas-de-diagnostico/herramientas2.png')}}" alt="office content 2">
          </div>
      </div>
  </section>

  <section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/motores/motores1.png')}}" alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/motores/motores2.png')}}" alt="office content 2">
        </div>
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h3 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Motores</h2>
            <ul class="px-2" style="list-style-type: circle;">
                <li>Tipos de Motores</li>
                <li>Tipos de Imanes</li>
                <li>Fases de Motor</li>
                <li>Funcionamiento de Motor</li>
                <li>Componentes de Motor</li>
                <li>Diagnóstico, Reparación de Motores (Cambios de Sensores Efecto HALL)</li>
            </ul>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
  <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
      <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
          <h3 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Baterías</h2>
          <div>
              <ul class="px-2" style="list-style-type: circle;">
                <li>Tipos de Baterías (Litio - Plomo)</li>
                <li>Parámetros de las Baterías</li>
                <li>Componentes de la Batería (Celdas - BMS)</li>
                <li>Diagnóstico y Reparación de Baterías</li>
                <li>Conexión e Instalación</li>
              </ul>
          </div>
      </div>
      <div class="grid grid-cols-2 gap-4 mt-8">
          <img class="w-full rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/baterias/baterias1.png')}}" alt="office content 1">
          <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/baterias/baterias2.png')}}" alt="office content 2">
      </div>
  </div>
</section>

<section class="bg-white dark:bg-gray-900">
  <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
      <div class="grid grid-cols-2 gap-4 mt-8">
          <img class="w-full rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/cargadores/cargadores1.png')}}" alt="office content 1">
          <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/cargadores/cargadores2.png')}}" alt="office content 2">
      </div>
      <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
          <h3 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Cargadores</h2>
          <ul class="px-2" style="list-style-type: circle;">
              <li>Diagnóstico y Reparación de Cargadores</li>
          </ul>
      </div>
  </div>
</section>

<section class="bg-white dark:bg-gray-900">
<div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
    <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
        <h3 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Controladores</h2>
        <div>
            <ul class="px-2" style="list-style-type: circle;">
              <li>Diagnóstico de Controladores</li>
              <li>Principio de Funcionamiento</li>
              <li>Descripción de Componentes de Controlador</li>
            </ul>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 mt-8">
        <img class="w-full rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/controladores/controladores1.png')}}" alt="office content 1">
        <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/controladores/controladores2.png')}}" alt="office content 2">
    </div>
</div>
</section>

<section class="bg-white dark:bg-gray-900">
  <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
      <div class="grid grid-cols-2 gap-4 mt-8">
          <img class="w-full rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/accesorios-y-componentes-de-las-motocicletas-electricas/accesorios1.png')}}" alt="office content 1">
          <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{asset('img/presenciales/vehiculos-electricos/accesorios-y-componentes-de-las-motocicletas-electricas/accesorios2.png')}}" alt="office content 2">
      </div>
      <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
          <h3 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Accesorios y Componentes de las Motocicletas Eléctricas</h2>
          <ul class="px-2" style="list-style-type: circle;">
              <li>Acelerador</li>
              <li>Sensores de Frenado</li>
              <li>Sensor de Pedaleo Asistido</li>
          </ul>
      </div>
  </div>
  </section>

  <section>
    <div class="rounded-md shadow grid grid-cols-1 gap-4 md:grid-cols-4 p-2">
      <a href="{{route('inyeccion-electronica')}}" class="items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black md:py-4 md:text-md md:px-5">Inyección Electrónica</a>
      <a href="{{route('electricidad-basica')}}" class="items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black md:py-3 md:text-md md:px-5">Electricidad en Motocicletas </a>
      <a href="{{route('alto-rendimiento')}}" class="items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black md:py-4 md:text-md md:px-5">Alto Cilindraje </a>
      <a href="{{route('preparacion-electronica')}}" class="items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black md:py-4 md:text-md md:px-5">Preparación Electrónica</a>
      
    </div>                                                                                                                                                                                                                                                                                                                                                                        
  </section>


</body>
</html>
</x-app-layout>