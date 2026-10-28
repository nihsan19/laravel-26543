<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>{{ $title }}</title>
</head>
<body>
  <h1>{{ $title }}</h1>
  <p>{{ $owner }} さんの本棚です。</p>
  <p>全 {{ count($books) }} 冊</p>

  <table border="1">
    <tr>
      <th>書名</th>
      <th>著者</th>
      <th>価格</th>
    </tr>
    @forelse ($books as $id => $book)
      <tr>
        <td><a href="{{ route('books.show', $id) }}">{{ $book['title'] }}</a></td>
        <td>{{ $book['author'] }}</td>
        <td>
          @if ($book['price'] >= 1000)
            <strong>{{ $book['price'] }}円</strong>
          @else
            {{ $book['price'] }}円
          @endif
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="3">本はまだありません。</td>
      </tr>
    @endforelse
  </table>

  <p><a href="{{ route('top') }}">トップへ戻る</a></p>
</body>
</html>