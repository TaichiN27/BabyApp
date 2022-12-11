<x-app-layout>
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"> <title>Blog</title>
    </head>
    <body>
        <h1>投稿</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>投稿タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>投稿内容</h2>
                <textarea name="post[text]" placeholder="本文"></textarea>
            </div>
                <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
</x-app-layout>