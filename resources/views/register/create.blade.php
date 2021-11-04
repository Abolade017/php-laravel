<x-layout>
    <section class="px-6 py-8 mx-auto max-w-2xl">
        <main class="bg-gray-100 p-6 border-gray-200 rounded-xl mt-10">
            <h1 class="text-center text-xl font-bold">Register</h1>
            <form action="/reg" method="post" class="mt-10">
                @csrf
                <x-form.input name='name' />
                <x-form.input name="email" type='email' />
                <x-form.input name=username />
                <x-form.input name="password" />
                <x-form.button>Register</x-form.button>
                {{-- @if ($errors->any())

                    @foreach ($errors->all() as $error)
                        <ul>
                            <li class="text-red-500 text-xs">{{ $error }}</li>
                        </ul>
                    @endforeach
                @endif --}}

            </form>
        </main>
    </section>
</x-layout>
