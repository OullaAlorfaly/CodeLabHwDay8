@extends('layouts.master')
@section('content')
    <div class="container" style="padding-top: 100px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" method="post" action="/add/addStudent">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">First Name</label>
                        <div class="col-sm-10">
                            <input name="first_name" type="text" class="form-control "placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">Last Name</label>
                        <div class="col-sm-10">
                            <input name="last_name" type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">Grad</label>
                        <div class="col-sm-10">
                            <input name="grade" type="text" class="form-control" placeholder="grade">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection