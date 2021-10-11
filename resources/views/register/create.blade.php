<x-layout>
    <section class="px-6 py-8 mx-auto max-w-2xl">
       <main class=" mt-10">
           <h1 class="text-center text-xl font-bold">Register</h1>
        <form action="/reg" method="post" class="mt-10">
            <div class="mb-6" >
                <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
                <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" required>
            </div>
        </form>
       </main>
    </section>
</x-layout>