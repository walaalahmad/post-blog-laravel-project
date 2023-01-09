@auth


    <x-panel>
        <form method="POST" action="/posts/{{ $post->id }}/comments">
            @csrf

            <header>
                <img src="https://i.pravatar.cc/60?u={{ $post->id }}" alt="" width="40" height="40"
                    class="rounded-full">
                <h2 class="ml-4"> Post Your Comment here!</h2>

            </header>
            <div class="mt-6">
                <textarea class="focus:outline-none focus:ring text-sm w-full" rows="5" name="body" placeholder="Things to say"
                    required>
   </textarea>
                @error('body')
                    <p class="text-red-500 mt-1 ml-20"> {{ $message }}</p>
                @enderror

            </div>
            <input type="hidden" name="post_id" value="{{ $post->id }}">

            <div class="flex justify-end mt-6 pt-6">
                <x-form.button>Publish</x-form.button>

            </div>

        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="underline"> Register </a>
        OR <a class="underline" href="/login">Login</a> To post comment </p>
@endauth
