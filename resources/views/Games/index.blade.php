<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="animalImage text-center rounded shadow-lg bg-warning p-5">
                <h1 class="pb-2">どーっちだ？？</h1>
                    <button type="button" class="btn btn-primary" style="height: 100px; width:60%;" id="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-volume-up-fill" viewBox="0 0 16 16">
                          <path d="M11.536 14.01A8.473 8.473 0 0 0 14.026 8a8.473 8.473 0 0 0-2.49-6.01l-.708.707A7.476 7.476 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303l.708.707z"/>
                          <path d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.483 5.483 0 0 1 11.025 8a5.483 5.483 0 0 1-1.61 3.89l.706.706z"/>
                          <path d="M8.707 11.182A4.486 4.486 0 0 0 10.025 8a4.486 4.486 0 0 0-1.318-3.182L8 5.525A3.489 3.489 0 0 1 9.025 8 3.49 3.49 0 0 1 8 10.475l.707.707zM6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06z"/>
                        </svg>
                    </button>
            </div>
            
              <div class="row align-items-center mt-5">
                <div class="col text-center">
                  <button id="ans1Pic" ></button>
                </div>
                <div class="col text-center">
                  <button id="ans2Pic" ><img  src="/images/animals/パンダ.JPG" class="img-fluid" alt="..." name="いぬ" height="500px"></button>
                </div>
            　</div>
            　<div　class="text-center">
            　  <h1 id='ans' class="text-center fs-1r" style="color:yellow;"> 
            　    
            　  </h1>
            　  <button id='next'>つぎへ</button>
            　</div>　
        </div>
        <script src="{{ asset('js/games.js') }}"></script>
    </body>
</html>