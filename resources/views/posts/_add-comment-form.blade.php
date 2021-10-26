@auth
    <x-panel class="">
        <form action="posts/{{ $post->slug }}/comments" method="post" class="border px-6 py-10">
            @csrf
            <header class="flex items-center space-x-4">
                <img src="https://i.pravatar.cc/60?id={{ auth()->id() }}" alt="" class="rounded-full" width="40"
                    height="40">

                <h2 class="items-center ">Want to participate?</h2>
            </header>
            <div class="mt-4">
                <textarea name="body" id="" rows="5" class="w-full text-sm" placeholder="Quick, think of something to say "
                    required>
                </textarea>
                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror

            </div>
            <div class="flex justify-end border-gray-200 border-t pt-6 mt-6">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p> <a href="/reg" class="hover:underline">Register</a>or <a href="/log-in" class="hover:underline">login</a> to
        leave a comment.</p>
@endauth
