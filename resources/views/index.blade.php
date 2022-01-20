<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Advanced-Test</title>
</head>

<body>
  <h1>トップページ</h1>
  <form action="inquire" method="POST">
    @csrf
    <uL style="list-style: none;">
      <li>氏名<br><input type="text" name="name"></li>
      <li>メールアドレス<br><input type="text" name="email"></li>
      <li><button type="submit">送信する</button></li>
    </uL>
  </form>
</body>

</html>