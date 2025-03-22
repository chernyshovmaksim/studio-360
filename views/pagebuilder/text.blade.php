<section class="blog-page">
    <div class="container container--small">
        <h3 class="blog-page__title">{{ $block['title'] }}</h3>
        <div class="blog-page__text">
            @evoParser($block['body'])
        </div>
    </div>
</section>
