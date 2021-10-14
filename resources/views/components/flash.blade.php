@if (session()->has('success'))
    <div x-data="{show:true}" x-init="setTimeOut(()=>false,4000)" x-show="show"
        class="fixed bg-blue-500 text-white px-4 py-2 rounded-xl bottom-6 right-3 text-sm">
        <p>{{ session('success')->get('success') }}</p>
    </div>
@endif
