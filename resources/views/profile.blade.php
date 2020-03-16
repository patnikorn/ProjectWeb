@extends('layouts.app')
@section('content')

<div style="width: 1140px; display: block; position: absolute; top: 0; left: 0; right: 0; margin: auto; margin-top: 51px;">
  <img src="logoweb.jpg" style="width: 1140px; display: block; margin: auto">
</div>

<hr/>

<br><br><br><br><br><br><br><br<br><br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }}'s Profile</h2>
            <form enctype="multipart/form-data" action="{{ route('profile.update')  }}" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br><br>
                <input type="submit" class="pull-right btn btn-sm btn-primary">
                <a href="{{action('PostController@index')}}" class="pull-right btn btn-sm btn btn-danger"
                style="
                        margin-top: 0px;
                        margin-bottom: 5px;
                        margin-right: 5px;
                        margin-left: 5px;
                    "> Back </a>

            </form>
        </div>
    </div>
</div>

<hr/>

@endsection
