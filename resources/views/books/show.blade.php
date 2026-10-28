<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>{{ $book['title'] }}</title>
</head>
<body>
  <h1>{{ $book['title'] }}</h1>
  <p>著者：{{ $book['author'] }}</p>
  <p>価格：{{ $book['price'] }}円</p>
  <p><a href="{{ route('books.index') }}">一覧へ戻る</a></p>
</body>
</html>