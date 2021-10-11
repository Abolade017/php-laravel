  {{-- @foreach ($posts as $post)
    @dd($loop) 
    <article>
        <?= $post ?>
    </article>
  {{-- using @yield layout --}}
  {{-- @endforeach --}}
  {{-- @extends('layout')
    @section('content')
        @foreach ($posts as $post)
            {{-- @dd($loop) --}}
  {{-- <article>
                <?= $post ?>
            </article>

        @endforeach
    @endsection --}}
  {{-- using content layout --}}
  <x-layout>
      @include ('posts._header')
      <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
          @if ($posts->count())
              <x-post-grid :posts="$posts" />
              {{$posts->links()}}
          @else
              <p class="text-center">No post yet. Please check back</p>
          @endif
          </div>

          {{-- <div class="lg:grid lg:grid-cols-2">
                <x-post-card />
                <x-post-card />
                
            </div>

            <div class="lg:grid lg:grid-cols-3">
                <x-post-card />
                <x-post-card />
                <x-post-card />
            </div> --}}
      </main>
      {{-- @foreach ($posts as $post)
            {{-- @dd($loop) --}}
      {{-- <article>
                <?= $post ?>
            </article> --}} 

      {{-- @endforeach --}}

  </x-layout>
  </body>

  </html>
