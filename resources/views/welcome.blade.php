<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlas SNS</title>
    
    <!-- インラインCSS -->
    <style>
        body {
            background: linear-gradient(to bottom, #0072ff, #f4d03f); /* グラデーション */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.6); /* 半透明背景 */
            padding: 40px;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
        }

        .container h2 {
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
        }

        .welcome-message {
            font-size: 22px;
            color: green;
            margin-bottom: 20px;
        }

        .info-message {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #e74c3c;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            width: 100%;
        }

        .btn:hover {
            background-color: #c0392b;
        }

        .link {
            color: white;
            text-decoration: none;
            font-size: 14px;
            margin-top: 15px;
            display: inline-block;
        }

        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>登録が完了しました！</h2>
        <p class="welcome-message">ようこそ、{{ Auth::user()->name }}さん！</p> <!-- ユーザー名 -->
        <p class="info-message">ユーザー登録が完了しました。早速ログインしてみましょう！</p>
        <a href="{{ route('login') }}" class="btn">ログイン画面へ</a>
    </div>
</body>
</html>
