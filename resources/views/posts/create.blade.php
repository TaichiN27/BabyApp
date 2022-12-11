<x-app-layout>
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"> <title>Blog</title>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class='container text-center m-5'>
        <h1 class="fw-bold">投稿</h1>
        <form action="/" method="POST">
            @csrf
            <div class="title m-5">
                <h2 class="fw-bolder">投稿タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" required/>
            </div>

            <div class="form-floating  text-center">
              <textarea name="post[text]" class="form-control text-center" required placeholder="赤ちゃんを泣き止ませるコツ、おすすめしたい動画のリンクなど" id="floatingTextarea2" style="height: 150px;"></textarea>
              <label for="floatingTextarea2">投稿内容</label>
            </div>
            <button type="submit" class="btn btn-primary m-5"　value="保存">保存</button>
        </form>
        
        </div>
        <div class="back m-5">[<a href="/">back</a>]</div>
    </body>
</html>
</x-app-layout>