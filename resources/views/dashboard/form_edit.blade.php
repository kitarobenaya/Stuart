@extends('layout.layout')
@section('title', 'Stuart | Add Schedule Form')

@section('navbar')
    <x-dashboard_component.Navbar scheduleId="{{ $studyDay->id }}" />
@endsection

@section('header')
    <x-dashboard_component.Header title="Stuart." />
@endsection

@section('content')
    <form action="{{ route('dashboard.update-study-day', $studyDay->id) }}" method="POST" class="w-[80%] flex flex-col items-center gap-y-2 rounded-3xl p-4 bg-white outline-2 outline-lightBorder shadow-xl">
        @csrf
        @method('PATCH')

        <h1 class="text-[1.5rem] font-semibold">Edit Your Schedule</h1>

        <div class="input-wrapper w-full flex flex-col rounded-2xl p-4">
            <label for="date" class="text-lg font-semibold">Date</label>
            <input type="date" name="date" id="date" class="bg-lightPrimary p-1 w-full text-base placeholder:text-gray-400 focus:outline-lightAccent focus:outline-2 rounded-lg" value="{{ $studyDay->date }}">
        </div>
        <x-dashboard_component.form.error name="date" />

        <button type="submit" class="bg-lightPrimary w-[40%] h-8 rounded-xl font-semibold outline-2 outline-lightBorder cursor-pointer">Update</button>
    </form>
    <script>
        const date = document.getElementById("date");
        date.focus();
        window.scrollTo(0, 0);
    </script>
@endsection