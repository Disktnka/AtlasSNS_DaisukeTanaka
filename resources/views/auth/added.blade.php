<x-logout-layout>
  <div class="content">
    <!-- メッセージ部分 -->
    <p class="sub-title">ようこそ！{{ $userName }}さん</p>
    <p>ユーザー登録が完了しました。早速ログインしてみましょう！</p>

    <form action="{{ route('login') }}" method="GET">
      <button type="submit" class="button">ログイン画面へ</button>
    </form>
  </div>

  <style>
    body {
      background: linear-gradient(to bottom, #0072ff, #f4d03f);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      margin: 0;
      font-family: 'Arial', sans-serif;
    }

    .content {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      width: 100%;
    }

    .title {
      font-size: 48px;
      font-weight: bold;
      color: #1e3a8a;
    }

    .sub-title {
      font-size: 20px;
      color: #333;
    }

    .button {
      background-color: #e74c3c;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 5px;
      width: 100%;
      cursor: pointer;
      font-size: 18px;
      font-weight: bold;
      margin-top: 20px;
    }

    .button:hover {
      background-color: #c0392b;
    }

    .footer-link {
      display: block;
      margin-top: 15px;
      color: #3498db;
      text-decoration: none;
    }

    .footer-link:hover {
      text-decoration: underline;
    }
  </style>
</x-logout-layout>
