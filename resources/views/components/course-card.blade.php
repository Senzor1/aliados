@props(['course'])

<article class="card flex flex-col">
    <img class="h-36 w-full object-fill" src="{{Storage::url($course->image->url)}}" alt="">
    <div class="card-body flex-1 flex flex-col">
        <h2 class="card-title">{{Str::limit($course->title, 40)}}</h2>
        <p class="text-gray-500 tx-sm mb-2 mt-auto">Instructor: {{$course->teacher->name}}</p>

        <div>
            <ul class=" flex  text-sm " >
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating == 5 ? 'yellow' : 'gray'}}-400"></i></li>
            </ul>

            <p class="mt-2 text-sm text-gray-500 ml-auto">
                <i class="fas fa-user"></i>
                ({{$course->students_count}})
            </p>

        </div> 

        @if ($course->price->value == 0)
            <p class="my-2 text-gray-500 font-bold">GRATIS!</p>            
        @else
            <p class="my-2 text-gray-500 font-bold">$US {{$course->price->value}}</p>
        @endif
        
            <a href="{{route('courses.show', $course)}}" class="btn btn-primary btn-block">
                Mas informacion
            </a>
   
    </div>
</article>