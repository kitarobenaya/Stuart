<?php 
use Carbon\Carbon;
?>

@extends('layout.layout')
@section('title', 'Stuart | Study List at ' . $studyDay->date)

@section('navbar')
    <x-dashboard_component.Navbar scheduleId="{{ $studyDay->id }}" />
@endsection

@section('header')
    <x-dashboard_component.Header title="Stuart." h1="Stuart (Study Smart) |  Study List at {{ $studyDay->date }}"/>
@endsection

@section('content')
    <h2 class="font-semibold text-2xl my-4 text-center text-lightTextMain">Your study list at <br>{{ Carbon::parse($studyDay->date)->format(('l')) }}, {{ $studyDay->date }}</h2>
    <div class="container-card w-[90%] h-auto grid grid-cols-1 gap-y-4">
        <x-dashboard_component.study-list.Card />
        <x-dashboard_component.study-list.Card />
        <x-dashboard_component.study-list.Card />
        <x-dashboard_component.study-list.Card />
    </div>
@endsection