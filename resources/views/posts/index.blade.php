<x-app-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
        <title>BabyApp</title>
        
        <link href="css/post.index.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/post.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    
    <body>

        <div class="background">
            <div class="movie">
                <h1>おすすめ動画</h1>
                <div class="smile_movie">
                    <h2 class=smile_title>赤ちゃんを笑顔に！</h2>
                    <iframe class="youtube" width="560" height="315" src="https://www.youtube.com/embed/sPq_tp0lGmo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="sleep_movie">
                    <h2 class="sleep_title">赤ちゃんが眠くなる・・・</h2>
                    <iframe class="youtube" width="560" height="315" src="https://www.youtube.com/embed/QLxHzw8c1tE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            
                <h2 class="create">あなたの知恵を共有しませんか？
                    <a href="/posts/create" class="btn btn--orange btn--cubic btn--shadow">口コミ投稿はこちら！</a>
                </h2>


                <div class='posts'>
                    @foreach ($posts as $post)
                        <div class="index-profile">
                            <div class="post">
                                <div class="title">
                                    <h3>投稿タイトル{{ $post->title }}</a></h3>
                                </div>
                                <div class="text">
                                    <p> {{ $post->text }}</p>
                                </div>
                                <div class="flex-display">
                                    <div class="user">
                                        <p>投稿者{{ $post->user->name}}</p>
                                    </div>
                                    <div class="like">
                                        @if(in_array($post->id, $is_like) == false)
                                            <form action="/like" method="POST">
                                                @csrf
                                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                                <button type="submit">
                                                    いいね：{{ $post->likes->count() }}
                                                </button>
                                            </form>
                                        @else
                                            <form action="/" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                                <button type="submit">
                                                    <div class="like-color">
                                                        いいね：{{ $post->likes->count() }}
                                                    </div>
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        
            <div class="paginate">
                {{ $posts->links() }}
            </div>
        </div>
    </body>
</html>
</x-app-layout>