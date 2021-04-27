@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    @if ($post->image)
                        <img src="{{ $post->get_image }}" alt="" class="card-img-top img-size" style="width: 200px">
                    @elseif($post->iframe)
                    <div class="embed-responsive-16y9">
                        {!! $post->iframe !!}
                    </div>
                    @endif
                    <h5 class="card-tittle">{{$post->title}}</h5>
                    <p class="card-text">
                        {{$post->body}}
                    </p>
                    <p class="text-muted mb-0">
                        <em>&ndash; {{$post->user->name}}</em>
                        {{ $post->created_at->format('d-m-Y')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
