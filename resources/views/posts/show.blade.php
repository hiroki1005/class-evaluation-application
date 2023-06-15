<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>成果物</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="/css/style.css">
    </head>
    
    <body>
     <h1 class="title">
         {{$review->title}}
     </h1>
     
     <div class="content">
         <div class="content_post">
             <h3>教員名:{{$review->professor}}</h3>
             <h3>楽単度：{{$review->ease}}</h3>
             <h3>授業満足度:{{$review->satisfaction}}</h3>
             <h3>授業評価基準:{{$review->evaluation}}</h3>
             <h3>授業内容</h3>
             <p>{{$review->overview}}</p>
         </div>
     </div>
     
     <div class="footer">
            <a href="/posts/index">back</a>
     </div>
    
    </body>
</html>