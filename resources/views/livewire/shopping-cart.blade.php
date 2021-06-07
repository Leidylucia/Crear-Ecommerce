<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <section class="bg-white rounded-lg shadow-lg p-6 text-gray-700">
        <h1 class="text-lg font-semibold mb-6">
            CARRITO DE COMPRAS
        </h1>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th></th>
                    <th>Precio</th>
                    <th>Cant</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach (Cart::content() as $item)
                    <tr>
                        <td>
                            <div class="flex">
                                <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}" alt="">
                                <div>
                                    <p class="font-bold">
                                        {{ $item->name }}
                                    </p>
                                    @if ($item->options->color)
                                        <span>
                                            Color: {{ $item->options->color }}
                                        </span>
                                    @endif
                                    @if ($item->options->size)
                                        <span class="mx-1">
                                            -
                                        </span>
                                        <span>
                                            {{ $item->options->size }}
                                        </span>

                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>
                                USD
                                {{ $item->price }}
                                <a class="ml-6 cursor-pointer hover:text-red-600">
                                    <i class="fas fa-trash">
                                    </i>
                                </a>
                            </span>
                        </td>
                        <td>
                            @if ($item->options->size)
                                @livewire('update-cart-item-size', ['rowId' => $item->rowId], key( $item->rowId))
    
                            @elseif($item->options->color)
                                @livewire('update-cart-item-color', ['rowId' => $item->rowId], key( $item->rowId))
                            
                            @else
                                @livewire('update-cart-item', ['rowId' => $item->rowId], key( $item->rowId))
                            @endif
                        </td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
