<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <ul>

            @forelse ($products as $product)
                <li>
                    <x-product-list :product="$product">

                    </x-product-list>
                </li>
            @empty
                <li class="bg-white rounded-lg shadow-2xl ">
                    <div class="p-4">
                        <p class="text-lg font-semibold text-gray-500">
                            Ningún producto coincide con lo solicitado
                        </p>
                    </div>
                </li>
            @endforelse
        </ul>
        <div class="mt-4">
            {{ $products->links() }}
        </div>
    </div>


</x-app-layout>
