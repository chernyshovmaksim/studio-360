<section class="blog-image">
    <div class="container--small">
        <img srcset="/{{ evo()->runSnippet('phpthumb', [
            'input' => $block['src'],
            'options' => 'w=600, far=C',
            'webp' => 1,
        ]) }} 1x, /{{ evo()->runSnippet('phpthumb', [
            'input' => $block['src'],
            'options' => 'w=720, far=C',
            'webp' => 1,
        ]) }} 2x"
            src="/{{ evo()->runSnippet('phpthumb', [
                'input' => $block['src'],
                'options' => 'w=720, far=C',
            ]) }}"
            width="100%" alt="Image">
    </div>
</section>
