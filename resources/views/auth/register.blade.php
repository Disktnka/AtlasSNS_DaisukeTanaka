<x-logout-layout>

  <style>
    /* 背景のグラデーション */
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

    /* ロゴのデザイン */
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

    /* 登録フォーム */
    .register-box {
        background-color: rgba(255, 255, 255, 0.6); /* 透明度を調整 */
        padding: 35px;
        border-radius: 12px;
        width: 400px;
        text-align: center;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }

    /* タイトルのフォントサイズ調整 */
    .register-title {
        font-size: 22px;
        color: #333;
        margin-bottom: 20px;
    }

    /* 入力フィールド */
    .input-box {
        width: 100%;
        padding: 12px;
        margin-top: 12px;
        border: 2px solid #a5d6a7; /* 黄緑の枠線 */
        border-radius: 6px;
        background: white;
        font-size: 16px;
    }

    /* 登録ボタン */
    .register-button {
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

    /* ボタンのホバー時 */
    .register-button:hover {
        background-color: #c0392b;
    }

    /* ログイン画面に戻るリンク */
    .login-link {
        color: white;
        text-decoration: none;
        display: block;
        margin-top: 12px;
        font-size: 15px;
    }

    .login-link:hover {
        text-decoration: underline;
    }
  </style>

  <div class="register-box">
      <h2 class="register-title">新規ユーザー登録</h2>

      {!! Form::open(['route' => 'register.store', 'method' => 'POST']) !!}

      {{ Form::label('username', 'ユーザー名') }}
      {{ Form::text('username', null, ['class' => 'input-box', 'required']) }}

      {{ Form::label('email', 'メールアドレス') }}
      {{ Form::email('email', null, ['class' => 'input-box', 'required']) }}

      {{ Form::label('password', 'パスワード') }}
      {{ Form::password('password', ['class' => 'input-box', 'required']) }}


      {{ Form::label('password_confirmation', 'パスワード確認') }}
      {{ Form::password('password_confirmation', ['class' => 'input-box', 'required']) }}
 

      <div>
        {{ Form::submit('新規登録', ['class' => 'register-button']) }}
      </div>

      <p><a href="{{ route('login') }}" class="login-link">ログイン画面に戻る</a></p>

      {!! Form::close() !!}
  </div>

</x-logout-layout>
