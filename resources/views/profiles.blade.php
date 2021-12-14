@extends('master')
@section('content')
    <div class="starter-template">
    <div class="panel">           
            <h2>ЭТО СТРАНИЦА ВСЕХ МЕД.КАРТ</h2>
            <a href="{{route('addclient')}}">  SOZDAT NOVUJU MED.KARTU</a>
            @if(session()->has('success'))
            <p class="alert alert-success">{{session()->get('success')}}</p>
            @endif
    </div>
        </div>
        <div class="row">
            @foreach($profiles as $profile)
                @include ('card' , compact('profile'))
            @endforeach
            
        </div>
        </div>
@endsection

