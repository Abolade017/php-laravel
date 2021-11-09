@props(['heading'])
<section class="max-w-5xl mx-auto py-8">
    <h1 class="font-bold text-lg mb-8 pb-4 border-b  ">{{ $heading }}</h1>
    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-bold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/admin/posts"
                        class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All Post</a>
                </li>

                <li>
                    <a href="/admin/posts/create"
                        class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Post</a>
                </li>
            </ul>
        </aside>
        <main class="w-full">
            <x-panel class="flex-1">
                {{ $slot }}
            </x-panel>
        </main>
    </div>

</section>
