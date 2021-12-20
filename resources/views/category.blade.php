@extends('master')

@section('title', 'Kategorija - ')

@section('content')
    <div class="starter-template">
        <h1>{{$category->name}} </h1>
    <p>
        {{$category->description}}
    </p>
    <a href="{{route('query')}}">  Ierakstities uz  
                @isset($category)
                {{$category->name}}
                @endisset
            </a>
    </div>
@endsection


