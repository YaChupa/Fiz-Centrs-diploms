@extends('master')
@section('content')
<div class="starter-template">
    <div class="panel">
        <h2>Jauns pakalpojums</h2>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>                                 
        @enderror
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>                                 
        @enderror
    </div> 
</div>
<div class="container">
    <div class="starter-template">
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{route('addcategoryDB')}}" method="POST">
                <div>
                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Pakalpojumu nosaukums: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Apraksts: </label>
                            <div class="col-lg-4">
                                <textarea type="text" name="description" id="description" value="" class="form-control"></textarea>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                    <br> 
                      @CSRF
                      <input type="submit" class="btn btn-outline-secondary" value="Izveidot jaunu pakalpojumu">                  
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
