@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
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
                            {{$post->get_excerpt}}
                        </p>
                        <a href="{{route('post', ['slug' => $post->slug])}}">Leer mas...</a>
                        <p class="text-muted mb-0">
                            <em>&ndash; {{$post->user->name}}</em>
                            {{ $post->created_at->format('d-m-Y')}}
                        </p>
                    </div>
                </div>
            @endforeach
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
