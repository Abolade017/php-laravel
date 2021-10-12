{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>

<body> --}}
{{-- using @yield layout --}}
{{-- @extends('layout')
    @section('content')
        <article>
            <?php
            echo $post;
            ?>
        </article>
        <a href="/">Go Back</a>
    @endsection --}}
{{-- using x-layout content layout --}}
<x-layout>
    {{-- <x-slot name="content"> --}}
    <article>
        <h1 class="text-xl text-blue-800">
            {!! $post->title !!}
        </h1>
        <p class="text-blue-900 py-4">
            By <a href="/?authors={{ $post->author->username }}"> {{ $post->author->name }}</a> in <a
                href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        <div class="space-y-4 lg:text-lg leading-loose">
            {!! $post->body !!}
            {{-- <?php echo $post->body; ?> --}}

        </div>
        <p class="py-4 text-blue-900">
            <a href="/">Go back</a>
        </p>
    </article>
    {{-- </x-slot> --}}
</x-layout>
{{-- </body>

</html> --}}
