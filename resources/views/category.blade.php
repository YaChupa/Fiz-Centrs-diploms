@extends('master')

@section('title', 'Kategorija - ')

@section('content')
    <div class="starter-template">
        <h1>{{$category->name}} STRANICA DLA USLUGI I T.D</h1>
    <p>
        {{$category->description}}
    </p>
    <a href="{{route('query')}}">  ZAPISTSA NA 
                @isset($category)
                {{$category->name}}
                @endisset
            </a>
    </div>
@endsection


