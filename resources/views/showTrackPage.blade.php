@extends('layouts.app')

@section('content')
    <div class="container mx-auto mart">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="{{ asset('storage/covers/' . $track->cover_file) }}" alt="" class="img-thumbnail">
            </div>
        </div>
    </div>
@endsection
