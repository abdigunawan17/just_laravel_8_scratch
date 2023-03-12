<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    {{ $styles }}
    <title>{{ $title }} | Bliputu</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="pt-4">
        {{ $slot }}
    </div>
    <script src="/js/app.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>