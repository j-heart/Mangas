<!doctype html>
@extends('layouts.app')
@section('content')
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>
    <header class="bg-secondary py-1">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Lastest Manga</h1>
                <p class="lead fw-normal text-white-50 mb-0">มังงะล่าสุด</p>
            </div>
        </div>
    </header>
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($posts as $post)
              <div class="col mb-5">
                  <div class="card h-100">
                      <img class="card-img-top" src="cover/{{ $post->cover }}" alt="..." />
                      <div class="card-body p-4">
                          <div class="text-center">
                              <h5 class="fw-bolder">{{ $post->title }} - {{ $post->episode }}</h5>
                              Author - {{ $post->author }}

                          </div>
                      </div>
                      <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                          <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/read/{{ $post->id }}">Read Manga</a></div>
                      </div>
                  </div>
              </div>
            @endforeach
          </div>
      </div>
  </section>
    </body>
</html>
@endsection
