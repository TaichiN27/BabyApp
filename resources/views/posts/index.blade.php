<x-app-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>BabyApp</title>
    </head>
    <body>
        <a href='/posts/create'>[create]</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class="post">
                    <div class="title">
                        <h3><a href="/posts/{{ $post->id }}">タイトル{{ $post->title }}</a></h3>
                    </div>
                    <div class="text">
                        <p>本文</p>
                    </div>
                    <div class>
                        <div class="user">
                            <p>投稿者</p>
                        <div>
                        <div class="like">
                            <p>いいね{{ $post->likes->count() }}<p>
                        <div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="paginate">
            {{ $posts->links() }}
        </div>

    </body>
</html>
</x-app-layout>