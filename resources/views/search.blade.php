@extends('layouts.app')

@section('content')
    <div class="container mx-auto mart">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="d-flex justify-content-center">Результаты поиска</h2>
                    <div class="container mt-5 row gap-5">
                        @foreach ($track as $item)
                            <div
                                class="container d-flex justify-content-center flex-md-column gap-2 links w-auto text-center">
                                <a href="{{ route('ShawTrack', ['id' => $item->id]) }}"><img
                                        src="{{ asset('storage/' . $item->cover_file) }}"
                                        style="width: 120px; height: 120px;"></a>
                                <a href="{{ route('ShawTrack', ['id' => $item->id]) }}"
                                    class="link-primary text-decoration-none fs-3 text-black w-auto"
                                    style="--bs-text-opacity: 0.6;">{{ $item->name }}</a>
                                <a class="link-primary text-decoration-none fs-5 text-black w-auto"
                                    style="--bs-text-opacity: 0.6;">{{ $item->user->name }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
