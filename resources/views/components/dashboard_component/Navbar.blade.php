<nav class="navbar bg-white w-[80%] h-20 rounded-full shadow-2xl flex flex-row justify-evenly items-center fixed bottom-10 z-100 overflow-hidden">
    <a href="{{ route('dashboard.index') }}" class="p-3 @if(request()->routeIs('dashboard.index')) bg-lightAccent rounded-full text-white @else text-black @endif">
        <x-heroicon-s-home class="w-7 h-7" />
    </a>
    <a href="{{ route('dashboard.form-study-day') }}" class="p-3 @if(request()->routeIs('dashboard.form-study-day')) bg-lightAccent rounded-full text-white @else text-black @endif">
        <x-heroicon-s-squares-plus class="w-7 h-7" />
    </a>

    <div class="toggle-theme bg-black p-3 flex justify-center items-center rounded-full z-50">
        <x-heroicon-s-moon class="w-7 h-7 cursor-pointer text-lightBackground" />
    </div>
</nav>