<x-layout>
    <section class="px-6 py-8 mx-auto max-w-2xl">
        <main class="bg-gray-100 p-6 border-gray-200 rounded-xl mt-10">
            <h1 class="text-center text-xl font-bold">Log in!</h1>
            <form action="/sessions" method="post" class="mt-10">
                @csrf
                                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                    <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email"
                        value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                    <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password"
                        required>

                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Login</button>
                </div>
            </form>

        </main>
    </section>
</x-layout>
