<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>成果物</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="/css/style.css">
    </head>
    
    <body>
      <div class="headline">
         <h1>経営学部</h1>
      </div>
        
      <div class="link" >
        <p>
           <a href="/posts/create">投稿フォーム</a>
            | 
           <a href="/">back</a>
        </p>
      </div>
      
      <h2>授業一覧</h2>
      
      <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{$post->id}}">{{ $post->title }}</a>
                    </h2>
                    <p class='body'>{{ $post->professor }}</p>
                </div>
            @endforeach
        </div>
    
    </body>
</html>