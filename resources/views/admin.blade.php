@extends('master')

@section('title')

@section('content')
<div class="container">
    <div class="starter-template">
        <h1>V adminke</h1>
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{route('scheduleImport')}}" method="POST" enctype="multipart/form-data">
                @CSRF
                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Import schedule: </label>
                <div class="col-lg-4">
                <input type="file" name="files">
                <input type="submit">
            </form>
        </div>
    </div>
    </div>
</div>          
    </div>


@endsection
