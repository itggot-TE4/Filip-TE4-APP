<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News page</title>
</head>
<body>
    <a href="{{ url('/news/create') }}">Create article</a>
    @foreach ($news as $article)
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->body }}</p>
        <a href="{{ url('/news', ['id' => $article->id]) }}">Show article</a>
        <br />
    @endforeach
</body>
</html>