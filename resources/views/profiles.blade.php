@extends('master')
@section('content')
<div class="starter-template">
    <div class="panel">           
            <a href="{{route('addclient')}}">  <h2>Jauna medicīnas karte</h2></a>
            @if(session()->has('success'))
            <p class="alert alert-success">{{session()->get('success')}}</p>
            @endif
    </div>
</div>
<div class="row">                           
    <div class="thumbnail">
        <div class="labels"></div>
        <div class="caption">   
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>KLIENTU MEDICĪNAS KARTES</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>
                                Vārds,Uzvārds
                            </th>
                            <th>
                                COVID-Sertifikats
                            </th>
                            <th>
                               Pakalpojums
                            </th>
                             <th>
                               E-pasts
                            </th>
                            <th>
                               Tālrunis
                            </th>
                        </tr>                        
                          @foreach($profiles as $profile)
                        <tr>
                            <td>{{$profile->name_surname}}</td>
                            <td>{{$profile->COVID_Sertifikats}}</td>
                            <td>{{$profile->getCategory()->name}}
                                @isset($category)
                                    {{$category->name}}
                                @endisset
                            </td>
                            <td>{{$profile->user_email}}</td>
                            <td>{{$profile->phone}}</td>
                             <td>                     
                                <a href="{{route('updateprofile',[$profile->id]) }}" class="btn btn-primary" role="button">Izmainīt</a>
                            </td>
                            <td>
                                <a href="{{route('profile',[$profile->id]) }}" class="btn btn-default" role="button">Informācija</a>                  
                            </td>                               
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
                </div>            
            </div>   
        </div>
    </div>
</div>
        
@endsection

