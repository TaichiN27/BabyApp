<x-app-layout>
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Blog</title>
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        
    </head>
    <body>
        
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="/mypage">マイページ</a></li>
                <li class="sidebar-nav-item"><a href="/">TOP</a></li>
                <li class="sidebar-nav-item"><a href="/games">ゲーム</a></li>
            </ul>
        </nav>
        
        <h1>投稿</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>投稿タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            
            <div class="text">
                <h2>投稿内容</h2>
                <textarea name="post[text]" placeholder="本文"></textarea>
            </div>
            
            <div class="image">
                <h2>画像投稿</h2>
                <input type="file" name="image">
            </div>
                <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
</x-app-layout>