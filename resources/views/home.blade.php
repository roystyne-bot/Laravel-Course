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
    <a href="{{ route("testpage") }}">Access the test page</a>
    
</body>
</html>