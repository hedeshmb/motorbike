@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h5 class="my-4">Sorting by:
                    <a <?php if($sortType == 'price') { ?> class="forSortType" <?php } ?> href="/?sortType=price"><small>Price</small></a> -
                    <a <?php if($sortType == 'date') { ?> class="forSortType" <?php } ?> href="/?sortType=date"><small>Date Added</small></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </h5>
                <h5>
                    Filter by Color:
                    {!! Form::select('color', $colorsMotorbikes, null, ['placeholder' => 'Select a color','onchange' => "window.location='/?filterType='+this.value;"]) !!}
                </h5>
                <hr>
            </div>
        </div>
        @if(!$motorbikes->count())
            <div class="alert alert-info">
                <p>Nothing Found</p>
            </div>
        @else
            @foreach($motorbikes as $motorbike)
                <!-- Project One -->
                <div class="row">
                    <div class="col-md-5">
                        <a href="#">
                            <img class="img-fluid rounded mb-3 mb-md-0" src="{{ $motorbike->image_url }}" alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <h3>Name: {{ $motorbike->name }}</h3>
                        <p>Make: {{ $motorbike->make }}</p>
                        <p>Model: {{ $motorbike->modelMotorbike }}</p>
                        <p>Price: ${{ $motorbike->price }}</p>
                        <p>Color: {{ $motorbike->color }}</p>
                        <a class="btn btn-primary" href="{{ route('show',$motorbike->id) }}">More Detail</a>
                    </div>
                </div>
                <!-- /.row -->

                <hr>
            @endforeach
         @endif


        {{ $motorbikes->appends( Request::query() )->render() }}

    </div>
@endsection
