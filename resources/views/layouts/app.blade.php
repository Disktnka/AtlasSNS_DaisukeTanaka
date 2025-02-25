<!DOCTYPE html>
<html lang="ja">
<head>
    @vite('resources/js/app.js') <!-- ViteのJSを参照 -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlas SNS</title>

    <!-- CSSファイル -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- コンテンツ部分 -->
    <div id="app">
        @yield('content')
    </div>

</body>
</html>
