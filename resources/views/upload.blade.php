@extends('layouts.app')
@section('content')


 <div class="container">
   <div class="row">
     <form action="{{ route('upload.file')}}" method="post" class="form-horizontal" enctype="multipart/form-data">

       {{ @csrf_field() }}

       <input type="file" name="file">
       <input type="submit" class="btn btn-info">
     </form>
   </div>
   <div class="row">
     <img src="{{ asset('/upload/images/default.jpg') }}" alt="">
 </div>


@endsection
