<x-layout>
    <section class="px-6 py-8 mx-auto max-w-2xl">
<x-panel>        
       <h1 class="text-center text-xl font-bold">Log in!</h1>
            <form action="/sessions" method="post" class="mt-10">
                @csrf
                <x-form.input name="email" type="email" autocomplete="username"/>
                <x-form.input name="password" type="password" autocomplete="new-password" />
                <x-form.button>Log In </x-form.button>
            </form>
</x-panel>
    </section>
</x-layout>
