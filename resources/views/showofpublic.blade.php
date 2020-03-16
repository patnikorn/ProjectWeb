@extends('layouts.app')
@section('content')

@if ($message = Session::get('success'))

  <div class="alert alert-success">
    <p> {{ $message }} </p>
  </div>
@endif
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-5">
      <h1>review2U Topic</h1>
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
    <a href=" {{ action('PostController@create') }}" class="btn btn-primary"> NEW TOPIC </a>
  </div>
</div>
<br>
<div class="col-md-3"></div>
<div class="col-md-4">
    <div class="card" style="width: 800px">
        @foreach($posts as $post)
            <img class="card-img-top" img src=" "/>
            <div class="card-body">
                <div class="card-title"><h1> {{ $post->name }} </h1></div>
                <p class="card-text"><h4> {{ $post->detail }} </h4></p>

                <hr />

                <!--  -->

                <a href="{{action('PublicController@index')}}" class="btn btn-primary"> Back </a>
            </div>
        @endforeach

        <hr />


        <div class="row">

                <div class="panel panel-default">
                    <div class="panel-heading">Comments</div>

                    <div class="panel-body comment-container" >

                        @foreach($comments as $comment)
                            <div class="well">
                                <i><b> {{ $comment->name }} </b></i>&nbsp;&nbsp;
                                <span> {{ $comment->comment }} </span>


                                        <!-- Dynamic Reply form -->

                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

        </div>

    </div>
</div>


@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/main.js') }}">

</script>
