@extends('layout.layout')
@section('title', 'Stuart | Dashboard')

@section('navbar')
    <x-dashboard_component.Navbar />
@endsection

@section('header')
    <x-dashboard_component.Header title="Stuart." />
@endsection

@section('content')
    <div class="container-card w-[90%] h-auto flex flex-col items-center gap-y-4">
        @if ($allSchedules->count())
            @foreach ($allSchedules as $schedule)
                <x-dashboard_component.CardParent id="{{ $schedule->id }}" date="{{ $schedule->date }}" description="{{ $schedule->description }}" />
            @endforeach
        @else
            <p class="mt-30">You dont have any schedule yet. <a href="{{ route('dashboard.form-study-day') }}" class="underline">Create One.</a></p>
        @endif
    </div>
@endsection