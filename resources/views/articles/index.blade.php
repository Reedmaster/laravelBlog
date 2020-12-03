@extends ('layout')

@section ('content')
    <div>
        <ul class="list">
            @forelse ($articles as $article)
                <li class="first">
                    <h3>
                        <a href="{{ $article->path() }}">{{ $article->title }}</a>
                    </h3>

                    <p>{{ $article->excerpt }}</p>
                </li>
            @empty
                <p>No relevant articles found.</p>
            @endforeach
        </ul>
    </div>
@endsection