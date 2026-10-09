<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="">
       <h2>{{ $post->title }}</h2>
       <p>{{ $post->body }}</p>
    </div>
</body>
</html>