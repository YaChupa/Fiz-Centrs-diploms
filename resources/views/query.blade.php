@extends('master')
@section('content')
<div class="starter-template">
    <div class="panel">
        <h2>PIERAKSTITIES UZ PAKALPOJUMU</h2>
        @if(session()->has('success'))
        <p class="alert alert-success">{{session()->get('success')}}</p>
        @endif
        @error('name_surname')
        <div class="alert alert-danger">Lauks – Vārds,Uzvārds - ir obligāts!</div>                                 
        @enderror
        @error('phone')
        <div class="alert alert-danger">Lauks – Tālrunis - ir obligāts!</div>                                 
        @enderror
        @error('COVID_Sertifikats')
        <div class="alert alert-danger">Lauks – COVID Sertifikāts - ir obligāts!</div>                                 
        @enderror
    </div>
</div>
<div class="container">
    <div class="starter-template">
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{route('makequery')}}" method="POST">
                <div>
                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Vārds,Uzvārds: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name_surname" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Tālrunis: </label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">COVID Sertifikāts: </label>
                            <div class="col-lg-4">
                                <input type="text" name="COVID_Sertifikats" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        
                        <br>
                        <br>
                        <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Pakalpojums: </label>
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
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Apraksts: </label>
                                <div class="col-lg-4">
                                    <textarea type="text" name="description" id="description" value="" class="form-control"></textarea>
                                </div>
                            </div>
                    </div>
                    <br>
                    @CSRF
                     <input type="submit" class="btn btn-outline-secondary" value="Pierakstīties">      
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
