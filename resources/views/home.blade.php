@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ Auth::user()->name }}</h5>
                        <p class="card-text">Дата регистрации: {{ Auth::user()->created_at->format('M. j, Y') }}</p>
                        <p class="card-text">Всего треков: {{ count(Auth::user()->tracks) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Альбомы</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex gap-5 flex-wrap">
                                <div class="container d-flex flex-md-column gap-2 links w-auto">
                                    <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
                                    <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto"
                                        style="--bs-text-opacity: 0.6;">Трек</a>
                                    <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto"
                                        style="--bs-text-opacity: 0.6;">Исполниель</a>
                                </div>
                                <div class="container d-flex flex-md-column gap-2 links w-auto">
                                    <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
                                    <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto"
                                        style="--bs-text-opacity: 0.6;">Трек</a>
                                    <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto"
                                        style="--bs-text-opacity: 0.6;">Исполниель</a>
                                </div>
                                <div class="container d-flex flex-md-column gap-2 links w-auto">
                                    <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
                                    <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto"
                                        style="--bs-text-opacity: 0.6;">Трек</a>
                                    <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto"
                                        style="--bs-text-opacity: 0.6;">Исполниель</a>
                                </div>
                                <div class="container d-flex flex-md-column gap-2 links w-auto">
                                    <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
                                    <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto"
                                        style="--bs-text-opacity: 0.6;">Трек</a>
                                    <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto"
                                        style="--bs-text-opacity: 0.6;">Исполниель</a>
                                </div>
                                <div class="container d-flex flex-md-column gap-2 links w-auto">
                                    <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
                                    <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto"
                                        style="--bs-text-opacity: 0.6;">Трек</a>
                                    <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto"
                                        style="--bs-text-opacity: 0.6;">Исполниель</a>
                                </div>
                            </li>
                        </ul>
                        <hr>
                        <h5 class="card-title">Треки</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex gap-5 flex-wrap">
                                @foreach ($tracks as $track)
                                    <div
                                        class="container d-flex flex-md-column gap-2 links w-auto justify-content-center align-items-center">
                                        <a href=""><img src="{{ asset('storage/' . $track->cover_file) }}"
                                                style="width: 120px; height: 120px;" alt=""></a>
                                        <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto"
                                            style="--bs-text-opacity: 0.6;">{{ $track->name }}</a>
                                        <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto"
                                            style="--bs-text-opacity: 0.6;">{{ $track->user->name }}</a>
                                    </div>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
