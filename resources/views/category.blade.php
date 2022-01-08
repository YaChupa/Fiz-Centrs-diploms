@extends('master')
@section('title', 'Kategorija - ')

@section('content')
<div class="starter-template">
    <h1>{{$category->name}} </h1>
    <p>
        {{$category->description}}
    </p>
        @guest
        <a href="{{route('query')}}">  Pierakstīties uz  
        @isset($category)
        {{$category->name}}
        @endisset
        </a>
        @else
        @auth
        @if(auth()->user()->isUser())
        <a href="{{route('query')}}">  Pierakstīties uz  
        @isset($category)
        {{$category->name}}
        @endisset
        </a>
        @endif
        @endauth
        @endguest
</div>
@endsection


