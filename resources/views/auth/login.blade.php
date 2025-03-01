<x-logout-layout>
  <style>
    body {
        background: linear-gradient(to bottom, #0072ff, #f4d03f);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        flex-direction: column;
        margin: 0;
    }

    .logo {
        font-size: 80px;
        font-weight: bold;
        color: white;
        text-align: center;
        line-height: 1.2;
        margin-bottom: 20px;
    }

    .logo-subtext {
        font-size: 18px;
        font-weight: normal;
        color: rgba(255, 255, 255, 0.8);
        margin-top: 5px;
    }

    .login-box {
        background-color: rgba(255, 255, 255, 0.6);
        padding: 35px;
        border-radius: 12px;
        width: 380px;
        text-align: center;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }

    .login-title {
        font-size: 22px;
        color: #333;
        margin-bottom: 20px;
    }

    .input-box {
        width: 100%;
        padding: 12px;
        margin-top: 12px;
        border: 2px solid #a5d6a7;
        border-radius: 6px;
        background: white;
        font-size: 16px;
    }

    .login-button {
        background-color: #e74c3c;
        color: white;
        padding: 14px;
        width: 100%;
        border: none;
        border-radius: 6px;
        margin-top: 20px;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .login-button:hover {
        background-color: #c0392b;
    }

    .register-link {
        color: white;
        text-decoration: none;
        display: block;
        margin-top: 12px;
        font-size: 15px;
    }

    .register-link:hover {
        text-decoration: underline;
    }

    .alert {
        color: red;
        font-size: 14px;
        margin-bottom: 20px;
    }
  </style>

  <div class="login-box">
      <h2 class="login-title">AtlasSNSへようこそ</h2>

      <!-- ログインフォーム -->
      <form action="{{ route('login') }}" method="POST">
          @csrf <!-- CSRFトークンを埋め込む -->

          <!-- エラーメッセージの表示 -->
          @if ($errors->any())
              <div class="alert">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          <label for="email">メールアドレス</label>
          <input type="email" name="email" id="email" class="input-box" required>

          <label for="password">パスワード</label>
          <input type="password" name="password" id="password" class="input-box" required>

          <button type="submit" class="login-button">ログイン</button>
      </form>

      <p><a href="{{ route('register') }}" class="register-link">新規ユーザーの方はこちら</a></p>
  </div>

</x-logout-layout>
