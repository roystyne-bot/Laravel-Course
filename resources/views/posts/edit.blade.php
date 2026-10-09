<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h1>Edit Post!</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
         <!-- Tells Laravel to traet this as a PUT request -->
        <label>Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}">

        <label>Body:</label>
        <textarea name="body" id="body">{{ old('body', $post->body) }}</textarea>

        <button type="submit">Update</button>
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>