<x-app-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       

        <title>BabyApp</title>

        
    </head>
    <body>
    
        <div class="post">
            <div class="title">
                <h3>タイトル{{ $post->title }}</h3>
            </div>
            <div class="text">
                <p>本文{{ $post->title }}</p>
            </div>
            <div class>
                <div class="user">
                    <p>投稿者{{ $post->user->name }}</p>
                <div>
                <div class="like">
                    <p>いいね<p>
                <div>
            </div>
        </div>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
</x-app-layout>