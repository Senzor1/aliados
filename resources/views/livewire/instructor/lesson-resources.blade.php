<div class="card" x-data="{open: false}">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="card-body bg-gray-100">
        <header>
            <h1 class="cursor-pointer" x-on:click="open = !open">Recursos de la leccion</h1>
        </header>

        <div x-show="open">
            <hr class="my-2">

            @if ($lesson->resource)
                
                <div class="flex justify-between items-center">
                    <p><i wire:click="download" class="fas fa-download text-gray-500 mr-2 cursor-pointer"></i>{{$lesson->resource->url}}</p>
                    <i wire:click="destroy" class="fas fa-trash text-red-500 cursor-pointer"></i>
                </div>
            
            @else
                <div>

                    <form wire:submit.prevent="save">
                        <div class="flex items-center">
                            <input wire:model="file" type="file" class="flex-1 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <button type="submit" class="btn btn-primary text-sm ml-2">Guardar</button>
                        </div>

                        <div class="text-blue-500 font-bold mt-1" wire:loading wire:target="file">
                            Cargando...
                        </div>

                        @error('file')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </form>
                </div>
            @endif
        </div>
    </div>

</div>
