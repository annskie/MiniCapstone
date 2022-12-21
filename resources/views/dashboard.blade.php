@extends('base')

@include('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container m-3">
        <strong><h2 class="text-white text-center">Dashboard</h2></strong>
        <div class="card col-sm-7 offset-sm-3 border border-light mt-5">
            <div class="card-header bg-warning bg-opacity-50">
                <h1 class="text-center">Musics</h1>
            </div>
            <div class="card-body bg-danger bg-opacity-25 shadow d-flex">
                <img class="offset-sm-1" src="images/music.jpg" alt="cover">
                <img class="offset-sm-1" src="images/logo.png" alt="cover">
            </div>
        </div>
    </div>

@endsection

<style>
    img {
        width: 85%;
    }
</style>
