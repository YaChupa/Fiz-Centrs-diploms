@extends('master')

@section('title')

@section('content')
    <div class="starter-template">
         @if(session()->has('success'))
            <p class="alert alert-success">{{session()->get('success')}}</p>
            @endif
         @foreach($categories as $category)
         <div class="panel">
            <a href="{{route('category',$category->name)}}">
                <h2>{{$category->name}}</h2>
            </a>
        </div>
         @endforeach
          @auth
            @if(auth()->user()->isAdmin())
            <a href="{{route('addcategory')}}">  IZVEIDOT JAUNU PAKALPOJUMU</a>
             @endif
            @endauth
        </div>
@endsection
