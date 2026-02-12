<?php 
use Carbon\Carbon;
?>

@extends('layout.layout')
@section('title', 'Stuart | Study List at ' . $studyDay->date)

@section('navbar')
    <x-dashboard_component.Navbar studyDayId="{{ $studyDay->study_days_id }}" />
@endsection

@section('header')
    <x-dashboard_component.Header title="Stuart." h1="Stuart (Study Smart) |  Study List at {{ $studyDay->date }}"/>
@endsection

@section('content')
    <h2 class="font-semibold text-2xl my-4 text-center text-lightTextMain underline decoration-lightAccent">Your study list at <br>{{ Carbon::parse($studyDay->date)->format(('l')) }}, {{ $studyDay->date }}</h2>
    <div class="container-card w-[90%] h-auto grid grid-cols-1 gap-y-4">
        @if($study_lists->count())
            @foreach ($study_lists as $study_list)
                <x-dashboard_component.study-list.Card id="{{ $study_list->id }}" title="{{ $study_list->title }}" description="{{ $study_list->description }}" />
            @endforeach
        @else
            <p class="mt-30 text-lightTextMain text-center">You dont have any study list yet. <a href="{{ route('dashboard.form-study-list', $studyDay->study_days_id) }}" class="underline">Create One.</a></p>
        @endif
    </div>
@endsection