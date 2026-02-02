    @props(['title'])
    
    {{-- Header for dashboard --}}
    @if(request()->routeIs('dashboard.index'))
        <header class="w-full h-auto">
            <h1 class="text-[2.5rem] font-bold text-lightTextMain text-center">{{ $title }}</h1>
            <h1 class="text-center">Hello, Kitaro!</h1>
            <p class="text-center text-sm">Let's Schedule Your Study</p>
        </header>
    @endif

    {{-- Header for add schedule form --}}
    @if(request()->routeIs('dashboard.form'))
        <header class="w-full h-auto">
            <h1 class="text-[2.5rem] font-bold text-lightTextMain text-center">{{ $title }}</h1>
            <h1 class="text-center">Hello, Kitaro!</h1>
            <p class="text-center text-sm">Let's Schedule Your Study</p>
        </header>
    @endif