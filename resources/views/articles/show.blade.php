@extends ('layout')

@section ('content')
    <div>
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->body }}</p>
    </div>
@endsection
