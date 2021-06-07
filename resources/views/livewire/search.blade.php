<div class="flex-1 relative" x-data>
    <form action="{{route('search')}}" autocomplete="off">
        <x-jet-input name="name" wire:model="search" type="text" class="w-full" placeholder="¿Está buscando algún producto?">
        </x-jet-input>
        <button class="absolute top-0 right-0 w-12 h-full bg-green-600 flex items-center justify-center rounded-r-md">
            <x-search size="35" color="green">

            </x-search>
        </button>
    </form>
    <div class="absolute w-full mt-1 hidden" :class="{'hidden': !$wire.open}" @click.away="$wire.open = false">
        <div class="bg-white rounded-lg shadow mt-1">
            <div class="px-4 py-3 space-y-1">
                @forelse ($products as $product)
                    <a href="{{ route('products.show', $product) }}" class="flex">
                        <img class="w-16 h12 object-cover" src="{{ Storage::url($product->images->first()->url) }}"
                            alt="">
                        <div class="ml-4 text-gray-700">
                            <p class="text-lg font-semibold leading-4">{{ $product->name }}</p>
                            <p class="">Categoria: {{ $product->subcategory->category->name }}</p>
                        </div>
                    </a>
                @empty
                    <p class="text-lg leading-4">
                        No existe ningún registro con los parámetros especificado
                    </p>

                @endforelse
            </div>
        </div>
    </div>
</div>
