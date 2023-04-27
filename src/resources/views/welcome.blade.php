<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Fullstack Project</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
</head>
<body>
    <div id="example">sagv</div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Fullstack Project</title>
    <link rel="stylesheet" href="/src/resources/css/app.css" />
</head>
<body>
    <div id="example">sagv</div>
    <script type="module" src="/src/resources/js/app.js"></script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div id="app"></div>
    </body>
</html>