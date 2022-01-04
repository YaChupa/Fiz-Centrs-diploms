@extends('master')
@section('content')
    <div class="starter-template">
    <div class="panel">           
            <h2>Lapa ar visiem klientu med.kartiem</h2>
            <a href="{{route('addclient')}}">  Izveidot jaunu med.karti</a>
            @if(session()->has('success'))
            <p class="alert alert-success">{{session()->get('success')}}</p>
            @endif
            
            
    </div>
        </div>

<div class="row">
          
                   
<div class="thumbnail">
        <div class="labels">
            
            
                    </div>
        <div class="caption">
            
<div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Klientu med.kartes</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>
                                Name Surname
                            </th>
                            <th>
                                Covid Sertifikats
                            </th>
                            <th>
                               Category
                            </th>
                             <th>
                               Email
                            </th>
                        </tr>
                        
                          @foreach($profiles as $profile)
                        <tr>
                            <td>{{$profile->name_surname}}</td>
                            <td>{{$profile->COVID_Sertifikats}}</td>
                            <td> {{$profile->getCategory()->name}}
                                    @isset($category)
                                        {{$category->name}}
                                    @endisset
                            </td>
                            <td>{{$profile->email}}</td>
                             <td>                     
                                    <a href="{{route('updateprofile',[$profile->id]) }}"
                   class="btn btn-primary"
                   role="button">Change</a>
                            </td>
                            <td>
                                     <a href="{{route('profile',[$profile->id]) }}"
                   class="btn btn-default"
                   role="button">About</a>                  
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

