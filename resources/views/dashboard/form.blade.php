@extends('layout.layout')
@section('title', 'Stuart | Add Schedule Form')

@section('navbar')
    <x-dashboard_component.Navbar />
@endsection

@section('header')
    <x-dashboard_component.Header title="Stuart." />
@endsection

@section('content')
    <form action="{{ route('dashboard.store-study-day') }}" method="POST" class="w-[80%] flex flex-col items-center gap-y-2 rounded-3xl p-4 bg-white outline-2 outline-lightBorder shadow-xl">
        @csrf

        <h1 class="text-[1.5rem] font-semibold">Add a Schedule</h1>

        <div class="input-wrapper w-full flex flex-col rounded-2xl p-4">
            <label for="date" class="text-lg font-semibold">Date</label>
            <input type="date" name="date" id="date" class="bg-lightPrimary p-1 w-full text-base placeholder:text-gray-400 focus:outline-lightAccent focus:outline-2 rounded-lg">
        </div>
        @error('date')
            <p class="text-xs text-red-500">{{ $message }}</p>
        @enderror

        <div class="input-wrapper w-full flex flex-col rounded-2xl p-4">
            <label for="description" class="text-lg font-semibold">Description</label>
            <textarea name="description" id="description" placeholder="Enter description ..." cols="10" rows="5" class="bg-lightPrimary p-1 w-full text-base placeholder:text-gray-400 focus:outline-lightAccent focus:outline-2 rounded-lg"></textarea>
        </div>
        @error('description')
            <p class="text-xs text-red-500">{{ $message }}</p>
        @enderror

        <button type="submit" class="bg-lightPrimary w-[40%] h-8 rounded-xl font-semibold outline-2 outline-lightBorder">Add</button>
    </form>
    <script>
        const date = document.getElementById("date");
        date.focus();
        window.scrollTo(0, 0);
    </script>
@endsection