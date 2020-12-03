@extends ('layout')

@section ('content')
    <div>
        <h2>{{ $article->title }}</h2>
        <p>{!! $article->body !!}</p>

        <p>
            @foreach ($article->tags as $tag)
                <a href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
            @endforeach
        </p>
    </div>
@endsection
