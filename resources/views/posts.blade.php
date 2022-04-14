
    @extends('layout')

    @section('content')
        @foreach($posts as $post)
            <article>
                 {{$post}}
            </article>
        @endforeach
    @endsection
