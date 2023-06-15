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
      <h1>投稿フォーム</h1>
     </div>
     
     <form action="/posts" method="POST">
         @csrf
         <table class="form-table">
            <tbody>
             <tr>
                 <th>授業名</th>
                 <td><input type="text" name="post[title]" size="60" placeholder="経営学1"></td>
             </tr>
             <tr>
                 <th>教員名</th>
                 <td><input type="text" name="post[professor]" size="60" placeholder="山田太郎"></td>
             </tr>
             <tr>
                 <th>楽単度</th>
                 <td><input type="number" name="post[ease]" min="1" max="5" size="60" ></td>
             </tr>
             <tr>
                 <th>授業満足度</th>
                 <td><input type="number" name="post[satisfaction]" min="1" max="5" size="60" ></td>
             </tr>
             <tr>
                 <th>授業評価基準</th>
                 <td>
                    <select name="post[evaluation]">
                     <option value="未選択">未選択</option>
                     <option value="テスト">テスト</option> 
                     <option value="レポート">レポート</option>
                     <option value="併用">併用</option>
                    </select>
                 </td>
             </tr>
             <tr>
                 <th>授業内容</th>
                 <td><textarea name="post[overview]" cols="30" rows="10" placeholder="授業内容"></textarea></td>
             </tr>
            </tbody>
         </table>
         <div class="submit">
          <input type="submit" value="投稿" />
         </div>
     </form>
     
     <div class="footer">
         <a href="/posts/index">back</a>
     </div>
    
    </body>
</html>