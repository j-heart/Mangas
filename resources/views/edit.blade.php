<!doctype html>
@extends('layouts.app')
@section('content')
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mangas</title>


     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

     <style>
         #delete {
             border-style: solid;
             border-width: 2px;
         }
     </style>

    </head>
    <body>
                
            <div class="container" style="margin-left: 32%  ;" >
            <div class="container" style="margin-top: 50px  ;">
            <div class="row">

                <div class="col-lg-6">
                    <h3 class="text-center text-danger"><b>Update Post</b> </h3>
				    <div class="form-group">
                        <form action="/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                         <input type="text" name="title" class="form-control m-2" placeholder="title" value="{{ $posts->title }}">
        				 <input type="text" name="author" class="form-control m-2" placeholder="author" value="{{ $posts->author }}">
                         <input type="text" name="episode" class="form-control m-2" placeholder="episode" value="{{ $posts->episode }}">
                         <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body">{{ $posts->body }}</Textarea>
                         <label class="m-2">Cover Image</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                         <label class="m-2">Images</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                        </form>
                   </div>

                <div class="container" style="margin-top: 50px  ;">

                <div class="col-lg-3"  >
                    <p>Cover:</p>
                    <form action="/deletecover/{{ $posts->id }}" method="post" >
                    <button class="btn text-danger">DELETE</button>
                    @csrf
                    @method('delete')
                    </form>
                    <img src="/cover/{{ $posts->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    <br>



                     @if (count($posts->images)>0)
                     <p>Images:</p>
                     @foreach ($posts->images as $img)
                     <div id="delete" class="mb-2">
                        <form action="/deleteimage/{{ $img->id }}" method="post" >
                            <button class="btn text-danger">DELETE</button>
                            @csrf
                            @method('delete')
                       </form>
                        <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="" >

                     </div>
                     @endforeach
                     @endif

                </div>  
                </div>
                </div>
                </div>
            </div>

         </body>
</html>
@endsection









