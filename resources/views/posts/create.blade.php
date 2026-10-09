<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('/resources/css/app.css')
</head>

<body>
    <h1>Create Post!</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">

        <label>Body:</label>
        <textarea name="body" id="body">{{ old('body') }}</textarea>

        <button type="submit">Save</button>
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