@extends('master')

@section('title')

@section('content')
<div class="container">
    <div class="starter-template">
        @if(session()->has('success'))
            <p class="alert alert-success">{{session()->get('success')}}</p>
        @endif      
                   
    <div class="thumbnail">
        <div class="labels"></div>
        <div class="caption">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1>Pievienot grafiku</h1>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>
                                </th>
                                <th>
                                </th>
                            </tr>
                            <tr>
                            <form action="{{route('scheduleImport')}}" method="POST" enctype="multipart/form-data">
                            <td>                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Pievienot jaunu darba grafiku: </label>
                <div class="col-lg-4">
                <input type="file" name="files"></td>
                            <td> <input type="submit"></td>
                        </tr>
                         @CSRF
                            </form>
                        </tbody>
                    </table>
                </div>            
            </div> 
        </div>
    </div> 
    <div class="thumbnail">
        <div class="labels"></div>
            <div class="caption">           
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h1>Izmainit lietotaja statusu</h1>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>
                                    Id
                                    </th>
                                    <th>
                                    Name Surname
                                    </th>
                                    <th>
                                    Email
                                    </th>
                                    <th>
                                    Status
                                    </th>
                                </tr>
                                @foreach($users as $item)  
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->user_status}}</td>
                                    <td> 
                                    <form action="{{route('changestatus',$item->id)}}" method="POST">
                                    <div class="btn btn-outline-secondary" role="group">
                                    @CSRF
                                    <input type="submit" class="btn btn-outline-secondary" value="Izmainīt statusu">                           
                                    </div>  
                                    </form>
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
</div>
@endsection
