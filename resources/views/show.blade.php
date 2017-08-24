@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h5 class="my-4">
            </h5>
            <hr>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{ $motorbike->image_url }}" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <h3><b>Name:</b> {{ $motorbike->name }}</h3>
                <p><b>Make:</b> {{ $motorbike->make }}</p>
                <p><b>Model:</b> {{ $motorbike->modelMotorbike }}</p>
                <p><b>Engine size:</b> {{ $motorbike->engineSize }}<font size="1">cc</font></p>
                <p><b>Price:</b> ${{ $motorbike->price }}</p>
                <p><b>Color:</b> {{ $motorbike->color }}</p>
                <p><b>Year:</b> {{ $motorbike->year }}</p>
                <p><b>Weight:</b> {{ $motorbike->weight }}<font size="1">kg</font></p>
                <a class="btn btn-primary" href="{{ route('index') }}">Back</a>
            </div>
        </div>
    </div>
    <hr>
@endsection
