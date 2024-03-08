@extends('layout/main')

@section('title', 'comics')

@section('main-content')
<main id="main">
    <div class="container">
        <a href="#" class="title-series bg-blue">CURRENT SERIES</a>
    </div>
    <div class="container card-container">
        <ul>
            <li>super-man</li>
        </ul>
    </div>
    <div class="container load-more">
        <a href="#" class="bg-blue btn-load">LOAD MORE</a>
    </div>
</main>
@endsection