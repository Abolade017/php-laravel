<x-layout>
    <x-setting heading="'Edit Post:' . {{ $post->title }}">

        <form action="{{route('post.update', ['post' => $post])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name='title' value="{{ old('title', $post->title) }}" />
            <x-form.input name='slug' value="{{ old('slug', $post->slug) }}" />
            <div class="flex mt-6">
                <div>
                    <x-form.input name='thumbnail' type='file' value="{{ old('thumbnail', $post->thumbnail) }}" />
                </div>
                <img src="{{ $post->thumbnail }}" alt="" width="100" class="rounded-xl ">
            </div>
            <x-form.textarea name='excerpt' value="{{ $post->excerpt }}">{{ old('excerpt', $post->excerpt) }}
            </x-form.textarea>
            <x-form.field>
                <x-form.label name='Category' />
                <select name="category_id" id="category_id">
                    @foreach (\App\Models\Category::all() as $category)
                        <option class=""
                            value="{{ old('category', $post->category_id = $category->id) }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
            </x-form.field>

            <x-form.textarea name='body' value="{{ $post->body }}">{{ old('body', $post->body) }}
            </x-form.textarea>
            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>
