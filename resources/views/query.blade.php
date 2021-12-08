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
            <form action="" method="POST">
                <div>
                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Name,Surname: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name" id="name" value="" class="form-control">
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
                                                    <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Email: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="email" id="email" value="" class="form-control">
                                </div>
                            </div>
                                            </div>
                    <br>
                    <input type="hidden" name="_token" value="OMJ7VKvkZLOv2z4h7z4kFDBG89YwqEiMZbaKCx7J">                    <input type="submit" class="btn btn-success" value="Accept">
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
