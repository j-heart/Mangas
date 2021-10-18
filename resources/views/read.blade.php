@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <article>
                <header class="mb-4">
                    <h1 class="fw-bolder mb-1">{{ $posts->title }}</h1>
                </header>
                @if (count($posts->images)>0)
                @foreach ($posts->images as $img)
                <figure class="mb-4"><img class="img-fluid rounded" src="/images/{{ $img->image }}" alt="..." /></figure>
                @endforeach
                @endif
            </article>
        </div>
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">Description</div>
                <div class="card-body">{{ $posts->body }}</div>
            </div>
        </div>
    </div>
</div>
@endsection