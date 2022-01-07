@extends('master')
@section('content')
    <div class="starter-template">
                                    <div class="panel">
            
                <h2>IZMAINĪT MEDICĪNAS KARTI</h2>
                
                 @error('name_surname')
                                <div class="alert alert-danger">Lauks – Vārds,Uzvārds - ir obligāts!</div>                                 
              @enderror
             @error('COVID_Sertifikats')
                                <div class="alert alert-danger">Lauks – COVID-Sertifikats - ir obligāts!</div>                                 
             @enderror
                <h3>{{$updateprofile->name_surname}}</h3>
        </div>
       
        </div><div class="container">
    <div class="starter-template">
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{route('updateprofilesubmit',$updateprofile->id )}}" method="POST">
                <div>
                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Vārds,Uzvārds: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name_surname" id="name" value="{{$updateprofile->name_surname}}" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Tālrunis: </label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="phone" value="{{$updateprofile->phone}}" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">E-pasts: </label>
                            <div class="col-lg-4">
                                <input type="text" name="user_email" id="user_email" value="{{$updateprofile->user_email}}" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Pakalpojums: </label>
                                <div class="col-lg-4">
                                    <div class ="select">
                              <select name="category_id" >                  
                             @foreach($categoryinfo as $item)
                             <option value="{{$item->id}}"  {{$item->id == $updateprofile->category_id  ? 'selected' : ''}}>{{$item->name}}</option>
                              @endforeach  
                              
                             </select>
                                        </div>
                                </div>
                            </div>
                        <br>
                        <br>
                         <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">COVID-Sertifikats: </label>
                            <div class="col-lg-4">
                                <input type="text" name="COVID_Sertifikats" id="phone" value="{{$updateprofile->COVID_Sertifikats}}" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                          <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Apraksts: </label>
                            <div class="col-lg-4">
                                <textarea type="text" name="description" id="phone" value="" class="form-control">{{$updateprofile->description}}</textarea>
                            </div>
                        </div>
                        <br>
                        <br>
                        
                    </div>
                    <br> 
                      @CSRF
                      <input type="submit" class="btn btn-outline-secondary" value="Izmainīt">                  
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
