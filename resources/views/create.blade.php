
@extends('layouts.app')
@section('content')

@if ($message = Session::get('success'))

  <div class="alert alert-success">
    <p> {{ $message }} </p>
  </div>
@endif

<div style="width: 1140px; display: block; position: absolute; top: 0; left: 0; right: 0; margin: auto; margin-top: 51px;">
  <img src="/logoweb.jpg" style="width: 1140px; display: block; margin: auto">
</div>

<hr/>

<br><br><br><br><br><br><br><br<br><br><br><br>

<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-4">
      <h4> - - - Create Your Topic - - - </h4>
  </div>
  <div class="col-md-3">
      <form action="/searchs" method="get">
          <div class="input-group">
              <input type="search" name="search" class="form-control">
              <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary"> Search </button>
              </span>
          </div>
      </form>
    </div>

  <div class="col-md-1 text-right">
    <a href=" {{ action('PostController@create') }}" class="btn btn-success"> NEW TOPIC </a>
  </div>
</div>

<hr/>

<br>
<div class="row">

      <div class="col-md-3"></div>
        <div class="col-md-6 offset-md-3">
            @if( $message = Session::get ('danger') )
                <div class="alert alert-danger">
                  <strong> {{ $message }} </strong>
                </div>
            @endif

            <form action=" {{ action('PostController@store') }} " method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label> Name </label>
                    <input class="form-control" type="text" name="name" placeholder="Name" />
                </div>
                <div class="form-group">
                    <label> Datail </label>
                    <textarea class="form-control" name="detail" placeholder="Detail"></textarea>
                </div>
                <div class="form-group">
                    <label> Author </label>
                    <input class="form-control" type="text" name="author" placeholder="Author" />
                </div>
                <br>
                <button class="btn btn-primary" type="submit"> Submit </button>

                <a href="{{action('PostController@index')}}" class="btn btn-danger"> Back </a>


            </form>

        </div>
</div>

<br>

<hr/>

@endsection
