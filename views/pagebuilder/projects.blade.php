{{-- @dd(strval($block['ids'])) --}}
<section class="title">
    <div class="container">
        <h2>Еще по теме</h2>
    </div>
</section>

{!! evo()->runSnippet('DocLister', [
    'documents' => 3,
]) !!}
