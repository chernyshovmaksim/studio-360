@extends('layouts.main')


@section('content')
    <section class="callback">
        <div class="container">
            <div class="cols">
                <div class="col">
                    <div class="title">
                        <h2>На связи</h2>
                    </div>
                </div>
                <div class="col">
                    {!! $form !!}
                </div>
            </div>
        </div>
    </section>
@endsection
