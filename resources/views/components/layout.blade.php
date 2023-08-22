<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>{{ $title ?? 'Session login' }}</h1>
{{ $slot }}

@if (auth()->check())    
    <a href="{{ route('logout') }}">Logout</a>
@else
    <a href="{{ route('users.create') }}">Signup</a>
    <a href="{{ route('sessions.create') }}">Login</a>
@endif
</body>
</html>