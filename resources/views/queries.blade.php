@extends('master')
@section('content')
    <div class="starter-template">
                                    <div class="panel">
            
                <h2>ЭТО СТРАНИЦА ZAPISEI DLA RABOTNIKA</h2>
            
        </div>
       
        </div>

    <div class="row">
          
                   
<div class="thumbnail">
        <div class="labels">
            
            
                    </div>
        <div class="caption">
            
<div class="row justify-content-center">
            <div class="col-md-12">
                <h1>aaaa</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                dddd
                            </th>
                            <th>
                               dddd
                            </th>
                            <th>
                                 aaa
                            </th>
                            <th>
                               aaa
                            </th>
                        </tr>
                        
                          @foreach($queries as $query)
                           <form action="{{route('deletequeries',$query)}}" method="POST">
                        <tr>
                            <td>{{$query->name_surname}}</td>
                            <td>{{$query->COVID_Sertifikats}}</td>
                            <td>{{$query->getCategory()->name}}</td>
                            <td>{{$query->date}}{{$query->time}}</td>
                            <td>{{$query->description}}</td>
                             <td>                     
                                    {{$query->id}}
                                <div class="btn btn-outline-secondary" role="group">
                                    @CSRF
                                    <input type="submit" class="btn btn-outline-secondary" value="Delete query">                           
                                </div>  
                            </td>
                            <td>
                                     <div class="btn btn-outline-secondary" role="group">
                                    <a class="" type="button" href="">Display-none</a>
                                    
                                </div>                           
                            </td>                               
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
