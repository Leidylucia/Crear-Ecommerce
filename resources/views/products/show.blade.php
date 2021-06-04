<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-2 gap-6">
            <div>

                <div class="flexslider">
                    <ul class="slides">

                        @foreach ($product->images as $image)

                            <li data-thumb=" {{ Storage::url($image->url) }}">
                                <img src=" {{ Storage::url($image->url) }}" />

                            </li>

                        @endforeach
                    </ul>
                </div>
            </div>
            <div>
                <h1 class="text-xl font-bold text-coolGray-700">{{ $product->name }}</h1>
                <div class="flex">
                    <p class="text-coolGray-700 ">Marca: <a
                            class="underline capitalize hover:text-green-500">{{ $product->brand->name }}</a></p>
                    <p class="ml-5">
                        5
                        <li class="fas fa-star text-sm text-yellow-400"></li>

                    </p>
                    <a class="text-green-500 underline mx-6 hover:text-green-800">39 reseñas </a>
                </div>
                <p class="text-2xl font-semibold text-coolGray-700 my-3">USD {{ $product->price }}</p>

                <div class="bg-white rounded-lg shadow-lg mb-6">
                    <div class="p-4 flex items-center">
                        <span class="flex items-center justify-center h-10 w-10 rounded-full bg-yellow-400">
                            <i class="fas fa-truck text-sm text-white">

                            </i>
                        </span>
                        <div class="ml-4">
                            <p class="text-lg font-semibold text-yellow-400"> Se hacen envíos a todo el país</p>
                            <p>Recibelo el {{ Date::now()->addDay(7)->locale('es')->format('l j F') }}</p>
                        </div>
                    </div>
                </div>

                @if ($product->subcategory->size)
                    @livewire('add-cart-item-size', ['product' => $product])
                @elseif($product->subcategory->color)
                    @livewire('add-cart-item-color', ['product' => $product])
                @else
                    @livewire('add-cart-item', ['product' => $product])
                @endif
            </div>
        </div>
        @push('script')
            <script>
                $(document).ready(function() {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        controlNav: "thumbnails"
                    });
                });

            </script>
        @endpush
</x-app-layout>
