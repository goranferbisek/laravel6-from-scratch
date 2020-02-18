@extends ('layout')

@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            @forelse ($articles as $article)
            <div id="content">
                <div class="title">
                    <h2>
                        <a href="/articles/{{ $article->id }}">
                            {{ $article->title }}
                        </a>
                    </h2>
                </div>
                <p><img src="/images/banner.jpg" alt="" class="image image-full" /></p>
                <p>{!! $article->excerpt !!}</p>
            </div>

            @empty
                <p>No relevant articles yet!<p>
            @endforelse
        </div>
    </div>
@endsection