@extends('master')

@section('title', 'Profile')

@section('content')
    <div class="starter-template-profile">
        <div class="panel">
            
                <img src="">
                <h3>{{$profile->name_surname}}</h3>
            <p>
            
            </p>
            

        </div>
        <div class="profile">
            <p>Talrunis - {{$profile->phone}}</p>
            <p>E-pasts - {{$profile->email}}</p>
            <p>COVID-Sertifikats - {{$profile->COVID_Sertifikats}}</p>
            <p>Pakalpojums - {{$profile->getCategory()->name}}</p>
            <p>Informacija par pacientu jeb apraksts - {{$profile->description}}</p>
        </div>
            
        </div>
@endsection