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

    </head>
    <body>

        <div class="container" style="margin-top: 50px;">
            <div class="row">


                <div class="col-lg-3 "></div>
                <div class="col-lg-6 ">
                    <h3 class="text-center text-danger "><b>Add New Post</b> </h3>
				    <div class="form-group">
                        <form action="/post" method="post" enctype="multipart/form-data">
                         @csrf
                         <label for="">Title</label>
        				 <input type="text" name="title" class="form-control mb-3" placeholder="title">
                         <label for="">Author</label>
        				 <input type="text" name="author" class="form-control mb-3" placeholder="author">
                         <label for="">Episode</label>
                         <input type="text" name="episode" class="form-control mb-3" placeholder="episode">
                         <label for="">Description</label>
                         <Textarea name="body" cols="20" rows="4" class="form-control mb-3" placeholder="description"></Textarea>
                         <label class="mt-5">Cover Image</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control mt-1" name="cover">

                         <label class="mt-5">Images</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control mt-1" name="images[]" multiple>

                        <button type="submit" class="btn btn-danger mt-4 ">Submit</button>
                        </form>
                   </div>
                </div>
            </div>



         </body>
</html>
@endsection









