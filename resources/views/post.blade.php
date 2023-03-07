
@extends("layouts.main")

@section("container")


{{-- <?php var_dump($post) ?> --}}

{{-- <h1>{{ $post[0]['title'] }}</h1> --}}
<article>
    <h2>{{ $post->title }}</h2>
    <p>By. Julianto in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {{-- <h3>By: {{ $post["author"] }}</h3> --}}
    {!! $post->body !!}
    </article>
    <a href="/posts/">Back to Post</a>


@endsection
