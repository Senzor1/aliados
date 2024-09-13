<div class="mb-4">
    {!! Form::label('title', 'Titulo del curso') !!}
    {!! Form::text('title', null, ['class' => 'rounded border-gray-200 block w-full mt-1' . ($errors->has('title') ? ' border-red-600' : '')]) !!}

    @error('title')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('slug', 'Slug del curso') !!}
    {!! Form::text('slug', null, ['readonly' => 'readonly' ,'class' => 'rounded border-gray-200 block w-full mt-1' . ($errors->has('slug') ? ' border-red-600' : '')]) !!}
    
    @error('slug')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('subtitle', 'Sub titulo del curso') !!}
    {!! Form::text('subtitle', null, ['class' => 'rounded border-gray-200 block w-full mt-1' . ($errors->has('subtitle') ? ' border-red-600' : '')]) !!}

    @error('subtitle')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('description', 'Descripción del curso') !!}
    {!! Form::textarea('description', null, ['class' => 'rounded border-gray-200 block w-full mt-1' . ($errors->has('description') ? ' border-red-600' : '')]) !!}

    @error('description')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="grid grid-cols-3 gap-4">
    <div>
        {!! Form::label('category_id', 'Categoria:') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'rounded border-gray-200 block w-full mt-1']) !!}
    </div>

    <div>
        {!! Form::label('level_id', 'Nivel:') !!}
        {!! Form::select('level_id', $levels, null, ['class' => 'rounded border-gray-200 block w-full mt-1']) !!}
    </div>

    <div>
        {!! Form::label('price_id', 'Precio:') !!}
        {!! Form::select('price_id', $prices, null, ['class' => 'rounded border-gray-200 block w-full mt-1']) !!}
    </div>
</div>

<h1 class="text-2xl font-bold mt-8 mb-2">Imagen del curso</h1>

<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset($course->image)
            <img id="picture" class="w-full h-64 object-cover object-center" src="{{Storage::url($course->image->url)}}" alt="">
        @else
            <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/2611675/pexels-photo-2611675.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        @endisset
    </figure>

    <div>
        <p class=" mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim deserunt sequi officia accusamus labore facilis autem deleniti dolorum est consectetur delectus dolore necessitatibus, vitae, nulla atque voluptatum ea quaerat id!</p>
        {!! Form::file('file', ['class' => 'rounded border-gray-200 block w-full mt-1' . ($errors->has('file')) ? ' border-red-600' : '', 'id' => 'file', 'accept' => 'image/*']) !!}

        @error('file')
            <strong class="text-xs text-red-600">{{$message}}</strong>
        @enderror
    </div>
</div>
