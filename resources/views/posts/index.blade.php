<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('/resources/css/app.css')
</head>

<body>
    <h1>All posts!</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    @foreach($posts as $post)
        <div>
            <h2 class="text-orange-400">{{ $post->title }}</h2>
            <p class="text-black">{{ $post->body }}</p>
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE') <!-- Spoofs a DELETE request because HTML forms only support GET and POST methods -->
                <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
            </form>
        </div>
    @endforeach

</body>

</html>