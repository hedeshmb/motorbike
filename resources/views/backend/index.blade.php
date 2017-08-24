@extends('layouts.backend.main')

@section('title','MyBlog | Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-blue">
                    <span class="widget-caption">Add Motorbike</span>
                </div>
                <div class="widget-body">
                    @if(session('message'))
                        <div class="alert alert-info">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div>
                        {!! Form::model($motorbike, [
                                'METHOD'    =>  'POST',
                                'route' =>  'backend.motorbikes.store',
                                'files' =>  TRUE,
                                'id'    => 'post-form'
                             ])
                        !!}
                            <div class="form-group">
                                {!! Form::label("Name") !!}
                                {!! Form::text("name",null,['class'=>'form-control','placeholder'=>"Enter name"]) !!}
                                @if($errors->has('name'))
                                    <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label("Make") !!}
                                {!! Form::text("make",null,['class'=>'form-control','placeholder'=>"Enter make"]) !!}
                                @if($errors->has('make'))
                                    <span class="help-block">{{ $errors->first('make') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label("Model") !!}
                                {!! Form::text("modelMotorbike",null,['class'=>'form-control','placeholder'=>"Enter model"]) !!}
                                @if($errors->has('modelMotorbike'))
                                    <span class="help-block">{{ $errors->first('modelMotorbike') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label("Engine Size") !!}
                                {!! Form::text("engineSize",null,['class'=>'form-control','placeholder'=>"Enter engine size"]) !!}
                                @if($errors->has('engineSize'))
                                    <span class="help-block">{{ $errors->first('engineSize') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label("Year") !!}
                                {!! Form::text("year",null,['class'=>'form-control','placeholder'=>"Enter year"]) !!}
                                @if($errors->has('year'))
                                    <span class="help-block">{{ $errors->first('year') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label("Color") !!}
                                {!! Form::text("color",null,['class'=>'form-control','placeholder'=>"Enter color"]) !!}
                                @if($errors->has('color'))
                                    <span class="help-block">{{ $errors->first('color') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label("Weight") !!}
                                {!! Form::text("weight",null,['class'=>'form-control','placeholder'=>"Enter weight"]) !!}
                                @if($errors->has('weight'))weight
                                    <span class="help-block">{{ $errors->first('weight') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label("Price") !!}
                                {!! Form::text("price",null,['class'=>'form-control','placeholder'=>"Enter price"]) !!}
                                @if($errors->has('price'))
                                    <span class="help-block">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{ $motorbike->image_thumb_url ? $motorbike->image_thumb_url :URL::asset('image/noImage.png') }}" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{!! Form::file("image") !!}</span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>

                                @if($errors->has('image'))
                                    <span class="help-block">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-blue">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
