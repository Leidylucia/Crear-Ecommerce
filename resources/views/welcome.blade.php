<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <section>
            <h1 class="text-lg uppercase font-semibold text-gray-700">
                {{ $categories->first()->name }}
            </h1>
            @livewire('category-products', ['category' => $categories->first()])
        </section>
    </div>

    @push('script')
        <script>
            Livewire.on('glider', function() {

                new Glider(document.querySelector('.glider'), {
                    slidesToShow: 5.5,
                    slidesToScroll: 5,
                    draggable: true,
                    dots: '.dots',
                    arrows: {
                        prev: '.glider-prev',
                        next: '.glider-next'
                    }
                });

            });

        </script>
    @endpush
</x-app-layout>
