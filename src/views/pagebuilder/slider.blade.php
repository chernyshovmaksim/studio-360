<section class="product-slider">
    <div class="container" id="product-slider-{{ $index }}">
        @foreach ($block['images'] as $item)
            <img class="product-slider__item"
                srcset="/{{ evo()->runSnippet('phpthumb', [
                    'input' => $item['image'],
                    'options' => 'w=1100,h=500,zc=1',
                    'webp' => 1,
                ]) }}"
                alt="">
        @endforeach
    </div>
</section>

{{-- 1100x500 --}}
