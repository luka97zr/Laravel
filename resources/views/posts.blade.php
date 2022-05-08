{{-- @extends('layout')

    @section('content')
       @foreach($posts as $post)
            <article>
                <h1>
                    <a href="/post/{{ $post->slug}}">{{$post -> title}}</a>
</h1>
<p>By <a href="/?author={{$post->author->username}}">{{$post->author->username}}</a> in <a href="#">{{$post->category->name}}</a></p>
{!! $post -> body !!}
</article>
@endforeach
@endsection

@section('content') --}}

<x-layout>
    @include('_posts-header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())
            <x-posts-grid :posts="$posts" />
            {{$posts->links()}}
        @else
                <p class="text-center">No posts yet. Please check back later</p>
        @endif
    </main>
</x-layout>
