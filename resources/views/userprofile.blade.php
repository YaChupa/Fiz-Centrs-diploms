@extends('master')
@section('content')
    <div class="starter-template">
                                    <div class="panel">
            
                <h2>Tas ir jusu medicinas karte!</h2>
            
        </div>
        @if($userprofile == [])
        <div class="starter-template">
        <div class="panel">
            <h2>You dont have a med.card</h2>
        </div>
         </div>    
        @else
        @foreach($userprofile as $item)
         <div class="starter-template">
        <div class="panel">
            
                <img src="">
                <h3>{{$item->name_surname}}</h3>
            <p>
            
            </p>          
        </div>
            <p>Talrunis - {{$item->phone}}</p>
            <p>Email - {{$item->user_email}}</p>
            <p>COVID Sertifikats - {{$item->COVID_Sertifikats}}</p>
            <p>Kategorija - {{$item->getCategory()->name}}</p>
            <p>Informacija par pacientu - {{$item->description}}</p>
         </div>  
        @endforeach               
        @endif

        </div>
@endsection

