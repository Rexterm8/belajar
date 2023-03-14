
@extends("layouts.main")

@section("container")
<h3>Halaman Blog</h3>

@foreach ($posts as $post )
<article class="mb-5 border-bottom pb-4">
    <h2><a href="/post/{{ $post->slug }}"class="text-decoration-none">{{ $post->title }}</a></h2>

    <p>By. <a href="/authors/{{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a></p>
    {{-- <h3>By: {{ $post ["author"] }}</h3> --}}
    <p>{{ $post->excerpt}}</p>

    <a href="/post/{{ $post->slug }}"class="text-decoration-none">Read More...</a>

</article>

@endforeach


{{-- @foreach ($posts as $post )
<article class="mb-5">
    <h2>
        <a href="/post/{{ $post["slug"] }}">{{ $post ["title"] }}</a>
    </h2>
    <h3>By: {{ $post ["author"] }}</h3>
    <p>{{ $post ["body"] }}</p>
</article> --}}

{{-- @endforeach --}}

@endsection
