<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="/css/style.css">
    </head>
    
    <body>
      <div class="headline">
         <h1>経営学部</h1>
      </div>
        
      <div class="link" >
        <p>
           <a href="">投稿フォーム</a>
            | 
           <a href="/">back</a>
        </p>
      </div>
      
      <h2>授業一覧</h2>
      
      <table border="1">
          @foreach ($posts as $post)
          <tr>
              <th>授業名</th>
              <th>教員名</th>
              <th>投稿日</th>
          </tr>
          <tr>
              <td>{{posts->name}}</td>
              <td>{{posts->name}}</td>
              <td></td>
          </tr>
          @endforeach
      </table>
    
    </body>
</html>