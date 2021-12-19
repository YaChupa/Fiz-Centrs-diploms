@extends('master')
@section('content')
    <div class="starter-template">
    <div class="panel">           
            <h2>ЭТО СТРАНИЦА ВСЕХ МЕД.КАРТ</h2>
            <a href="{{route('addclient')}}">  SOZDAT NOVUJU MED.KARTU</a>
            @if(session()->has('success'))
            <p class="alert alert-success">{{session()->get('success')}}</p>
            @endif
            
            <form method="GET" action="{{ route('search') }}">
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <input type="text" class="form-control" id="search" name="search" placeholder="Search...">
                    </div>
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                    </div>
                </div>

            </form>
    </div>
        </div>
        

        <div class="row">
            @foreach($profiles as $profile)
                @include ('card' , compact('profile'))
            @endforeach
            
        </div>
        
@endsection

