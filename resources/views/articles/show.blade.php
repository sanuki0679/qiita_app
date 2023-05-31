@extends('layouts.main')

@section('content')
    <div class="article-show">
        <aside class="aside-lgtm">
            <div class="show-lgtm">
                <span>LG<br>TM</span>
            </div>
            <p class="show-like-count">{{ $article->likes_count }}</p>
        </aside>

        <article class="article-show-count">
            <div class="user-wrapper">
                <img src="{{ $article->user->profile_image_url }}" class="user-img">
                {{ $article->user->name }}さん
                <p>投稿日 {{ \Carbon\Carbon::parse($article->created_at)->setTimezone('Asia/Tokyo')->format('Y年m月d日 H時i分s秒'); }}</p>
            </div>

    <h1>{{ $article->title }}</h1>
    <p class="article-tag">
        <i class="fas fa-tags size"></i>
        @foreach ($article->tags as $article->tag)
            <span class="mgr">
                {{ $article->tag->name }}
                @if (next($article->tag))
                    @php echo ',' @endphp
                @endif
            </span>
        @endforeach
    </p>
    <div class="markdown-body">
        <p class="article-body">{{ $article->html }}</p>
    </div>
        </article>
    </div>
    <button type="button" class="show-return-button" onclick="location.href='{{ route('articles.index') }}'">一覧へ戻る</button>
@endsection
