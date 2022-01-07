@extends('master')
@section('content')
    <div class="starter-template">
     <div class="panel">

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
                <h1>TABULA AR PIERAKSTIEM</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>
                               Vārds,Uzvāŗds
                            </th>
                            <th>
                               COVID-Sertifikats
                            </th>
                            <th>
                               Pakalpojums
                            </th>
                            <th>
                               Datums un Laiks
                            </th>
                            <th>
                               Apraksts
                            </th>
                        </tr>
                        
                          @foreach($queries as $query)
                           <form action="{{route('deletequeries',$query)}}" method="POST">
                        <tr>
                            <td>{{$query->name_surname}}</td>
                            <td>{{$query->COVID_Sertifikats}}</td>
                            <td>{{$query->getCategory()->name}}</td>
                            <td>{{$query->time}} {{$query->date}} </td>
                            <td>{{$query->description}}</td>
                             <td>                     
                                <div class="btn btn-outline-secondary" role="group">
                                    @CSRF
                                    <input type="submit" class="btn btn-danger" value="Izdzēst pierakstu">                           
                                </div>  
                            </td>
                        </tr>
                        </form>
                        @endforeach 
                    </tbody>
                </table>
            </div>            
        </div>       
     </div>
</div>
</div>
@endsection
