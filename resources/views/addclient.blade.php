@extends('master')
@section('content')
    <div class="starter-template">
                                    <div class="panel">
            
                <h2>ЭТО СТРАНИЦА ДЛЯ CОЗДАНИЯ МЕД.КАРТЫ</h2>
            
        </div>
       
        </div><div class="container">
    <div class="starter-template">
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{route('addclientDB')}}" method="POST">
                <div>
                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Name,Surname: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name_surname" id="name" value="" class="form-control">
                            </div>
                        </div>
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
                         <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">COVID Sertifikat (Ir/Nav): </label>
                            <div class="col-lg-4">
                                <input type="text" name="COVID_Sertifikats" id="phone" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                          <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Description: </label>
                            <div class="col-lg-4">
                                <textarea type="text" name="description" id="description" value="" class="form-control"></textarea>
                            </div>
                        </div>
                        
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Phone: </label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="phone" value="" class="form-control">
                            </div>
                        </div>
                        
                        <br>
                        <br>
                    </div>
                    <br> 
                      @CSRF
                      <input type="submit" class="btn btn-outline-secondary" value="Make new client card">                  
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
