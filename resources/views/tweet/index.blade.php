<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>つぶやきアプリ</title>
</head>
<body>
    <h1>つぶやきアプリ</h1>
    <div>
    <p>投稿フォーオム</p>
    <form action="{{ route('tweet.create') }}" method="post">
        @csrf
        <label for="tweet-content">つぶやき</label>
    </form>
    </div>
</body>
</html>