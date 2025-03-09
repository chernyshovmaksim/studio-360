<div class="projects-page__item">
    <a href="{{ $item['url'] }}" class="projects-page__item-link">
        <img srcset="/{{ $item['image']['hd'] }} 2x, /{{ $item['image']['sd'] }} 1x" src="/{{ $item['image']['sd'] }}"
            alt="" class="projects-page__item-image" />

        <div class="projects-page__item-info-wrapper">
            <a href="{{ $item['url'] }}" class="projects-page__item-info">
                <div class="projects-page__item-title">{{ $item['pagetitle'] }}</div>
                <div class="projects-page__item-date">{{ $item['date'] }}</div>
            </a>
            <div class="projects-page__item-categories">
                @foreach ($item['tags'] as $tag)
                    <a class="projects-page__item-categories-link"
                        href="/tags/{{ $tag['id'] }}">{{ $tag['pagetitle'] }}</a>
                @endforeach
            </div>
        </div>
    </a>
</div>
