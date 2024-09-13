<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <article class="card" x-data="{open: false}">
        <div class="card-body bg-gray-100">
            <header>
                <h1 class="cursor-pointer" x-on:click="open = !open">Descripción de la lección</h1>
            </header>

            <div x-show="open">
                <hr class="my-2">

                @if ($lesson->description)
                    <form wire:submit.prevent="update">
                        <textarea wire:model="description.name" class="w-full rounded block text-black p-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 my-2"></textarea>
                        @error('description.name')
                            <span class="text-sm text-red-500">{{$message}}</span>
                        @enderror

                        <div class="flex justify-end">
                            <button wire:click="destroy" class="btn btn-danger text-sm mx-2" type="button">Eliminar</button>
                            <button class="btn btn-primary text-sm" type="submit">Actualizar</button>
                        </div>
                    </form>
                @else
                
                    <div>
                        <textarea wire:model="name" class="w-full rounded block text-black p-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 my-2" placeholder="Escriba una descripcíon de la lección"></textarea>
                        @error('name')
                            <span class="text-sm text-red-500">{{$message}}</span>
                        @enderror

                        <div class="flex justify-end">
                            <button wire:click="store" class="btn btn-primary text-sm">Agregar</button>
                        </div>
                    </div>
                    
                @endif
            </div>
        </div>
    </article>
</div>
