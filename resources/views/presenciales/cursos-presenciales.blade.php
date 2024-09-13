<x-app-layout>

<body>
    <div class="grid gap-12 lg:grid-cols-2 lg:p-6 p-2">
        <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
          <img src="{{asset('img/presenciales/portada-inyeccion-electronica-presencial.png')}}" alt="inyeccion electronica" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-center rounded-lg transition duration-500 group-hover:rounded-xl">
          <div class="sm:w-7/12 pl-0 p-5">
            <div class="space-y-2">
              <div class="space-y-4">
                <h4 class="text-2xl font-semibold text-black">Curso de Inyección Electrónica</h4>
                <p class="text-gray-600">Eficiente y preciso aprende a diagnosticar las motocicletas de Inyección electrónica Multimarca (Yamaha, Suzuki, Honda, Kawasaki, Bajaj - Pulsar - Dominar, entre otros), teórico – práctico, totalmente presencial.</p>
              </div>
              <a href="{{route('inyeccion-electronica')}}" class="w-full flex items-center justify-center p-1 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black">Quiero saber más!</a>
            </div>
          </div>
        </div>

        <div>
          <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
            <img src="{{asset('img/presenciales/portada-electricidad-en-motocicletas-presencial.png')}}" alt="Electricidad Basica" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-center rounded-lg transition duration-500 group-hover:rounded-xl">
            <div class="sm:w-7/12 pl-0 p-5">
              <div class="space-y-2">
                <div class="space-y-4">
                  <h4 class="text-2xl font-semibold text-cyan-900">Curso Electricidad en Motocicletas</h4>
                  <p class="text-gray-600">Aprende todo sobre Electricidad en Motocicletas desde lo más básico hasta lo más avanzado, con nosotros de manera totalmente presencial (pruebas de estado mecánico, introducción a la electricidad, herramientas de medición y reparación, diseño de circuitos en protoboard, sistema de carga, encendido, luces, información y seguridad)</p>
                </div>
                <a href="{{route('electricidad-basica')}}" class="w-full flex items-center justify-center p-1 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black">Quiero saber más!</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- ocultos 26/03/2024 heidy
        <div>
          <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
            <img src="{{asset('img/presenciales/portada-mecanica-de-alto-cilindraje-presencial.png')}}" alt="Mecanica de alto cilindraje" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-center rounded-lg transition duration-500 group-hover:rounded-xl">
            <div class="sm:w-7/12 pl-0 p-5">
              <div class="space-y-2">
                <div class="space-y-4">
                  <h4 class="text-2xl font-semibold text-cyan-900">Curso Alto Cilindraje</h4>
                  <p class="text-gray-600">Senzor Academy te brinda curso completo de Mecánica de alto cilindraje, con tecnología de punta, a través de herramientas especializadas aprende a diagnosticar y reparar motores de alto cilindraje, teórico – práctico, totalmente presencial.</p>
                </div>
                <a href="{{route('alto-rendimiento')}}" class="w-full flex items-center justify-center p-1 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black">Quiero saber más!</a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
            <img src="{{asset('img/presenciales/portada-preparacion-electronica-en-alto-rendimiento-presencial.png')}}" alt="Preparacion electronica alto rendimiento" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-center rounded-lg transition duration-500 group-hover:rounded-xl">
            <div class="sm:w-7/12 pl-0 p-5">
              <div class="space-y-2">
                <div class="space-y-4">
                  <h4 class="text-2xl font-semibold text-cyan-900">Preparación Electrónica en Motocicletas de Alto Rendimiento y Competición</h4>
                  <p class="text-gray-600">Quieres aprender acerca de la Preparación Electrónica en Motocicletas de Alto Rendimiento y Competición, a través de los sistemas de comunicación a distancia podrás, recoger, procesar, diagnosticar y mejorar las motocicletas, teórico – práctico, totalmente presencial en Senzor Academy.</p>
                </div>
                <a href="{{route('preparacion-electronica')}}" class="w-full flex items-center justify-center p-1 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black">Quiero saber más!</a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
            <img src="{{asset('img/presenciales/portada-vehiculos-electricos-presencial.png')}}" alt="Vehiculos Electricos" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-center rounded-lg transition duration-500 group-hover:rounded-xl">
            <div class="sm:w-7/12 pl-0 p-5">
              <div class="space-y-2">
                <div class="space-y-4">
                  <h4 class="text-2xl font-semibold text-cyan-900">Vehículos Eléctricos (Motocicleta, Bicicleta y Patinetas)</h4>
                  <p class="text-gray-600">La nueva era de los vehículos eléctricos está llegando a revolucionar, aprende como repararlos aquí en Senzor Academy, teórico – práctico, totalmente presencial.</p>
                </div>
                <a href="{{route('vehiculos-electricos')}}" class="w-full flex items-center justify-center p-1 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black">Quiero saber más!</a>
              </div>
            </div>
          </div>
        </div>
        -->
        <div>
          <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
            <img src="{{asset('img/presenciales/presentacion-multiplexados.jpg')}}" alt="osciloscopio" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-center rounded-lg transition duration-500 group-hover:rounded-xl">
            <div class="sm:w-7/12 pl-0 p-5">
              <div class="space-y-2">
                <div class="space-y-4">
                  <h4 class="text-2xl font-semibold text-cyan-900">Redes Multiplexadas</h4>
                  <p class="text-gray-600">Este curso en línea sobre redes multiplexadas en motocicletas ofrece una introducción a la comunicación en la motocicleta, incluyendo señales eléctricas y digitales, esquemas de arquitectura de red y comprobaciones prácticas. Los estudiantes aprenderán sobre el protocolo CAN (Controller Area Network) y su aplicación en motocicletas, incluyendo diagnóstico, análisis y reparación de motocicletas equipadas con CAN. El curso también incluye temas como señales dinámicas, configuración de redes multiplexadas, actualización de software y aprendizaje, y OBD (On Board Diagnostic).</p>
                </div>
                <a href="{{route('redes-multiplexadas')}}" class="w-full flex items-center justify-center p-1 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black">Quiero saber más!</a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
            <img src="{{asset('img/presenciales/presentacion-osciloscopio.jpg')}}" alt="osciloscopio" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-center rounded-lg transition duration-500 group-hover:rounded-xl">
            <div class="sm:w-7/12 pl-0 p-5">
              <div class="space-y-2">
                <div class="space-y-4">
                  <h4 class="text-2xl font-semibold text-cyan-900">Osciloscopio</h4>
                  <p class="text-gray-600">Este curso en línea enseña el manejo y uso adecuado de un osciloscopio, incluyendo conceptos básicos, controles, funcionamiento y diferencias entre analógico y digital. Se abordarán aspectos específicos como precisión, respuesta en frecuencia, señal de disparo, medidas de voltaje, tiempo y frecuencia. Prácticas y ejemplos ayudarán a familiarizarse con el instrumento.</p>
                </div>
                <a href="{{route('osciloscopio')}}" class="w-full flex items-center justify-center p-1 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black">Quiero saber más!</a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
</div>
</body>
</x-app-layout>