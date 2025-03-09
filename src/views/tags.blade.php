@extends('layouts.main')


@section('content')

    <section class="title" style="margin-bottom: 2rem;">
        <div class="container">
            <h2>{{ $title }}</h2>
        </div>
    </section>



    <section class="projects-page">
        <div class="container">
            <div class="projects-page__list">
                @if (!empty($projects))
                    @foreach ($projects as $item)
                        @include('parts.product_card', [
                            'item' => $item,
                        ])
                    @endforeach
                @else
                    <p>В данной категории пока ни чего нет.</p>
                @endif
            </div>
        </div>
    </section>
@endsection
