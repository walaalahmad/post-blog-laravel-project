<x-layout>
    @include('_post_header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
        @endif
{{ $posts->links() }}
        {{-- <div class="lg:grid lg:grid-cols-2"> --}}
        {{-- <x-post-card />
            <x-post-card />

        </div>

        <div class="lg:grid lg:grid-cols-3">


<x-post-card />
<x-post-card />
<x-post-card />

        </div> --}}
    </main>
</x-layout>

{{--
    @extends('layout')
    @section('content')
       @foreach ($posts as $post)

            <article>
                <h1>
                     <a href="/posts/{{  $post->id }}">
                    {{  $post->title }}</a></h1>

                <div>
                    <?= $post->excerpt ?>
                </div>
                <div>
                <br>
                    By <a href="authors/{{ $post->author->username }} " >{{ $post->author->name }}" </a>  in  <a href="/categories/{{$post->category->slug  }}" > {{ $post->category->name }} </a>
                    </div>
            </article>
        @endforeach
        @endsection --}}
