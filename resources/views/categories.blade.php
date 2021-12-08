@extends('master')

@section('title', 'Categories')

@section('content')
    <div class="starter-template">
         @foreach($categories as $category)
         <div class="panel">
            <a href="{{route('category',$category->code)}}">
                <h2>{{$category->name}}</h2>
            </a>
        </div>
         @endforeach
        </div>
@endsection