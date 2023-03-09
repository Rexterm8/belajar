
@extends("layouts.main")

@section("container")


{{-- <?php var_dump($post) ?> --}}

{{-- <h1>{{ $post[0]['title'] }}</h1> --}}
<article>
    <h2>{{ $post->title }}</h2>
    <p>By. <a href="#"class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a></p>
    {{-- <h3>By: {{ $post["author"] }}</h3> --}}
    {!! $post->body !!}
    </article>
    <a href="/posts/"class="d-block mt-3">Back to Post</a>


@endsection
