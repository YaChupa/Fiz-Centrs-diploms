@extends('master')
@section('content')
    <div class="starter-template">
                                    <div class="panel">
            
                <h2>ЭТО СТРАНИЦА ИЗМЕНЕНИЯ МЕД.КАРТЫ</h2>
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
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Name,Surname: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name_surname" id="name" value="{{$updateprofile->name_surname}}" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        
                                                    <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Category: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="category_id" id="email" value="{{$updateprofile->category_id}}" class="form-control">
                                </div>
                            </div>
                        <br>
                        <br>
                         <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">COVID Sertifikat (Ir/Nav): </label>
                            <div class="col-lg-4">
                                <input type="text" name="COVID_Sertifikats" id="phone" value="{{$updateprofile->COVID_Sertifikats}}" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                          <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Description: </label>
                            <div class="col-lg-4">
                                <textarea type="text" name="description" id="phone" value="" class="form-control">{{$updateprofile->description}}</textarea>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                    <br> 
                      @CSRF
                      <input type="submit" class="btn btn-outline-secondary" value="UPDATE">                  
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
