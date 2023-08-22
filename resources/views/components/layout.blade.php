<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>{{ $title ?? 'Session login' }}</h1>
{{ $slot }}
</body>
</html>