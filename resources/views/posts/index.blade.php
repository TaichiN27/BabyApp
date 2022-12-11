<x-app-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
        <title>BabyApp</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="{{ asset('css/post.index.css') }}" rel="stylesheet"/>
    </head>
    
    <body>
        <header>
            <img src="">
        </header>
        
        <h1 class="movie_title">赤ちゃんを笑顔に！おすすめ動画</h1>

        <div class='posts'>
            @foreach ($posts as $post)
                <div class="post">
                    <div class="title">
                        <h3><a href="/posts/{{ $post->id }}">タイトル{{ $post->title }}</a></h3>
                    </div>
                    <div class="text">
                        <p>本文{{ $post->text }}</p>
                    </div>
                    <div class>
                        <div class="user">
                            <p>投稿者{{ $post->user->name}}</p>
                        </div>
                        <div class="like">
                            @if(in_array($post->id, $is_like) == false)
                                <form action="/" method="POST">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <button type="submit">
                                            いいね{{ $post->likes->count() }}
                                    </button>
                                </form>
                            @else
                                <form action="/" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <button type="submit">
                                            いいね取り消し{{ $post->likes->count() }}

                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        <div class="paginate">
            {{ $posts->links() }}
        </div>

    </body>
</html>
</x-app-layout>