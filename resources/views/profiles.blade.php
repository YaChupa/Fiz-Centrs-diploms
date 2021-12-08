@extends('master')
@section('content')
    <div class="starter-template">
                                    <div class="panel">
            
                <h2>ЭТО СТРАНИЦА ВСЕХ МЕД.КАРТ</h2>
            <a href="{{route('addclient')}}">  ZAPISTSA NA 
                
            </a>
    </div>
        </div>
        <div class="row">
            @foreach($profiles as $profile)
                @include ('card' , compact('profile'))
            @endforeach
            
        </div>
        </div>
@endsection

