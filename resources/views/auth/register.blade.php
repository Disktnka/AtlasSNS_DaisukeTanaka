<x-logout-layout>
    {!! Form::open(['url' => 'http://127.0.0.1:8000/register']) !!}

    <h2>新規ユーザー登録</h2>

    <!-- ユーザー名 -->
    <div class="username">
        {{ Form::label('username', 'ユーザー名') }}
        {{ Form::text('username', old('username'), ['class' => 'input']) }}
        @error('username')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- メールアドレス -->
    <div class="email">
        {{ Form::label('email', 'メールアドレス') }}
        {{ Form::email('email', old('email'), ['class' => 'input']) }}
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- パスワード -->
    <div class="password">
        {{ Form::label('password', 'パスワード') }}
        {{ Form::password('password', ['class' => 'input']) }}
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- パスワード確認 -->
    <div class="password_confirmation">
        {{ Form::label('password_confirmation', 'パスワード確認') }}
        {{ Form::password('password_confirmation', ['class' => 'input']) }}
        @error('password_confirmation')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- 登録ボタン -->
    <p class="text-right">
        {{ Form::submit('登録', ['class' => 'btn btn-success']) }}
    </p>

    {!! Form::close() !!}

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <p><a href="{{ 'http://127.0.0.1:8000/login' }}">ログイン画面へ戻る</a></p>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
    </div>

</x-logout-layout>