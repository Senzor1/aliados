<x-app-layout>
    <section class="bg-black py-12 mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6 ">
            <figure >
                <img class="h-96 w-full object-fill" src="{{Storage::url($course->image->url)}}" alt="">
            </figure>

            <div class="text-white">
                <h1 class="text-4xl">{{$course->title}}</h1>
                <h2 class="text-xl mb-3">{{$course->subtitle}}</h2>
                <p class="mb-2"><i class="fas fa-chart-line"></i> Nivel: {{$course->level->name}}</p>
                <p class="mb-2"><i class=""></i> Categoria: {{$course->category->name}}</p>
                <p class="mb-2"><i class="fas fa-users"></i> Matriculados: {{$course->students_count}}</p>
                <p><i class="far fa-star"></i> Clasificacion: {{$course->rating}}</p>
            </div>
        </div>
    </section>

    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6 mb-2.5">
        <div class="order-2 lg:col-span-2 lg:order-1">
            <!-- Descripcion -->
            <section class="card mb-8">
                <section class="card-body">
                    <h1 class="font-bold text-3xl">Descripción</h1>
                    
                    <div class="text-gray-700 text-base">
                        {!!$course->description!!}
                    </div>
                </section>
            </section>
            
            <!-- Requisitos  -->
            <section class="card mb-8">
                <section class="card-body">
                    <h1 class="font-bold text-3xl">Requisitos</h1>
                    
                    <ul class="list-disc list-inside">
                        @foreach ($course->requirements as $requirement)
                            <li class="text-gray-700 text-base">{{$requirement->name}}</li>
                        @endforeach
                    </ul>
                </section>
            </section>

            <section class="card mb-12">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2">Lo que aprenderas</h1>

                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                        @foreach ($course->goals as $goal)
                            <li class="text-gray-700 text-base"><i class="fas fa-check text-gray-600 mr-2"></i>{{$goal->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <section class="mb-12">
                <h1 class="font-bold text-3xl mb-2">Temario</h1>

                @foreach ($course->sections as $section)
                    <article class="mb-4 shadow" 
                    @if ($loop->first)
                        x-data="{open: true}"
                    @else
                        x-data="{open: false}"
                    @endif>
                        <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open = !open">
                            <h1 class="font-bold text-lg text-gray-600">{{$section->name}}</h1>
                        </header>

                        <div class="bg-white py-2 px-4" x-show="open">
                            <ul class="grid grid-cols-1 gap-2">
                                @foreach ($section->lessons as $lesson)
                                    <li class="text-gray-700 text-base"><i class="fas fa-play-circle mr-2 text-gray-600"></i>
                                        {{$lesson->name}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endforeach
            </section>

            <!-- Boton de Whatsapp -->
            <section>
                <div class="flex flex-col px-8 mx-8 bg-green-600 shadow-md rounded-2xl">
                    <a href="https://wa.link/6i4lmo" target="_blank">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg viewBox="0 0 448 512 " class="w-8 h-8 rounded-2xl p-1">
                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                </svg>
                                <div class="flex flex-col ml-1">
                                    <div class="font-medium leading-none text-white">Pregunta por tu cupo!</div>
                                </div>
                            </div>                   
                        </div>
                    </a>
                </div>
            </section>

            @livewire('courses-reviews', ['course' => $course])

        </div>
        
        <div class="order-1 lg:order-2">
            <section class="card mb-4">
                <div class="card-body">
                    <div class="flex items-center">
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{$course->teacher->profile_photo_url}}" alt="{{$course->teacher->name}}">
                        <div class="ml-4 ">
                            <h1 class="font-bold text-gray-500 text-lg">Inst. {{$course->teacher->name}}</h1>
                            <a class="text-blue-700 text-sm font-bold" href="">{{"@".Str::slug($course->teacher->name, '')}}</a>
                        </div>
                    </div>

                    @can('enrolled', $course)
                        
                        <a class="btn btn-danger btn-block mt-4" href="{{route('courses.status', $course)}}">Continuar con el curso</a>

                    @else
                        @if ($course->price->value == 0)
                            <p class="text-2xl font-bold text-gray-500 mt-3 mb-2">GRATIS</p>    
                            <form action="{{route('courses.enrolled', $course)}}" method="POST">
                                @csrf
                                <button class="btn btn-danger btn-block mt-4" type="submit">Inicia YA!</button>
                            </form>
                        @else
                            <p class="text-2xl font-bold text-gray-500 mt-3 mb-2">${{$course->price->value}}</p>
                            <a href="{{route('payment.checkout', $course)}}" class="btn btn-danger btn-block ">Comprar este curso</a>
                        @endif
                    @endcan
                </div>
            </section>

            <aside class="hidden lg:block">
                @foreach ($similares as $similar)
                    <article class="flex mb-6">
                        <img class="h-32 w-40 object-cover" src="{{Storage::url($similar->image->url)}}" alt="">
                        <div class="ml-3">
                            <h1>
                                <a class="font-bold text-gray-500 mb-3" href="{{route('courses.show', $similar)}}">{{Str::limit($similar->title, 35)}}</a>
                            </h1>
                            
                            <div class="flex items-center mb-2">
                                <img class="h-8 w-8 object-cover rounded-full shadow-lg" src="{{$similar->teacher->profile_photo_url}}" alt="">
                                <p class="text-sm ml-2">{{$similar->teacher->name}}</p>
                            </div>

                            <p class="text-sm"><i class="fas fa-star mr-2 text-yellow-400"></i>{{$similar->rating}}</p>

                        </div>
                    </article>
                @endforeach
            </aside>
        </div>
    </div>
</x-app-layout>