@extends('master')
@section('content')
    <div class="starter-template">
                                    <div class="panel">
            
                <h2>ЭТО СТРАНИЦА ДЛЯ ЗАПИСИ</h2>
            
        </div>
       
        </div><div class="container">
    <div class="starter-template">
    <div class="container">
        <div class="row justify-content-center">
             @if(session()->has('success'))
            <p class="alert alert-success">{{session()->get('successquery')}}</p>
            @endif
            <form action="{{route('makequery')}}" method="POST">
                <div>
                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Name,Surname: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name_surname" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Phone: </label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">COVID Sertifikats: </label>
                            <div class="col-lg-4">
                                <input type="text" name="COVID_Sertifikats" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        
                        <br>
                        <br>
                        <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Category: </label>
                                <div class="col-lg-4">
                              <select name="category_id">                  
                             @foreach($categoryinfo as $item)
                             <option value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach  
                              
                             </select>
                                </div>
                        </div>
                         <br>
                        <br>
                        
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Specialists un Laiks: </label>
                            <div class="col-lg-4">
                                <select name="schedule">                  
                             @foreach($info as $item)
                             <option value="{{$item}}">{{$item}}</option>
                              @endforeach  
                              
                             </select>
                            </div>
                        </div>
                     <br>
                        <br>
                                                    <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Description: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="description" id="email" value="" class="form-control">
                                </div>
                            </div>
                    </div>
                    <br>
                    @CSRF
                     <input type="submit" class="btn btn-outline-secondary" value="Make new query">      
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
