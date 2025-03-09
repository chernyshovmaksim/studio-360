<div class="product-footer">
    <div class="container container-full">
        <div class="product-footer__image">
            <img srcset="/{{ evo()->runSnippet('phpthumb', [
                'input' => $block['image'],
                'options' => 'w=1150, h=600, zc=1',
                'webp' => 1,
            ]) }}"
                alt="">
        </div>

        <div class="product-footer__links">
            @if (!empty($prevnextlinks['prev']))
                <a href="{{ $prevnextlinks['prev']['url'] }}" class="product-footer__link product-footer__link--prev">
                    <div>
                        <span><img srcset="/theme/images/icons/prev.svg" alt=""></span>
                        <span>{{ $prevnextlinks['prev']['pagetitle'] }}</span>
                    </div>
                </a>
            @endif

            @if (!empty($prevnextlinks['next']))
                <a href="{{ $prevnextlinks['next']['url'] }}" class="product-footer__link product-footer__link--next">
                    <div>
                        <span>{{ $prevnextlinks['next']['pagetitle'] }}</span>
                        <span><img srcset="/theme/images/icons/next.svg" alt=""></span>

                    </div>
                </a>
            @endif
        </div>
    </div>
</div>
