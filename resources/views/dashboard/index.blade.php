@extends('layout.layout')
@section('title', 'StudyFlow Dashboard')

@section('navbar')
    <x-dashboard_component.Navbar />
@endsection

@section('header')
    <x-dashboard_component.Header title="Study Flow" />
@endsection

@section('content')
    <div class="container-card w-[90%] h-auto flex flex-col items-center gap-y-4">
        <x-dashboard_component.CardParent />
        <x-dashboard_component.CardParent />
        <x-dashboard_component.CardParent />
        <x-dashboard_component.CardParent />
    </div>
@endsection