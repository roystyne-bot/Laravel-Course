<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="italic font-bold text-amber-700">Welcome to the Home Page</h1>

    <form action="{{ route('formsubmitted') }}" method="POST">
        @csrf
        <label for="fullname">Full name:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Type your full name!" required>
        <label for="fullname">E-mail:</label>
        <input type="text" id="email" name="email" placeholder="Type your email!" required>
         <button type="submit">Submit</button>
    </form>
</body>

</html>