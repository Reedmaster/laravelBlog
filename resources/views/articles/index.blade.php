@extends ('layout')

@section ('content')
    <div>
        <ul class="list">
            @foreach ($articles as $article)
                <li class="first">
                    <h3>
                        <a href="{{ $article->path() }}">{{ $article->title }}</a>
                    </h3>

                    <p>{{ $article->excerpt }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection