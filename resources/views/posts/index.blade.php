<x-app-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
        <title>BabyApp</title>
        
        <link href="css/post.index.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="background">
            <h1 class="movie_title">おすすめ動画</h1>
            <h2>赤ちゃんを笑顔に！</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/sPq_tp0lGmo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h2>赤ちゃんが眠くなる・・・</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/QLxHzw8c1tE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <h2>あなたの知恵を共有しませんか？
                <a href='/posts/create'>口コミ投稿はこちら</a>
            </h2>

            <div class='container'>     
                <div class='posts'>
                    @foreach ($posts as $post)
                        <div class="col-9 my-3 mx-auto">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="post">
                                        <div class="title">
                                            <h3>投稿タイトル{{ $post->title }}</a></h3>
                                        </div>
                                        <div class="text">
                                            <p>本文{{ $post->text }}</p>
                                        </div>
                                        <div class="user">
                                            <p>投稿者{{ $post->user->name}}</p>
                                        </div>
                                        <div class="like">
                                            @if(in_array($post->id, $is_like) == false)
                                                <form action="/like" method="POST">
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
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        
            <div class="paginate">
                {{ $posts->links() }}
            </div>
        </div>
    </body>
</html>
</x-app-layout>