@extends('layouts.app')


@section('content')
    <section>
        <div class="container">
            <h1>Projects</h1>

            @dump($projects)
        </div>

    </section>

@endsection