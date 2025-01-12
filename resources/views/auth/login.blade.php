<x-logout-layout>

  <!-- 適切なURLを入力してください -->
  {!! Form::open(['url' => 'http://127.0.0.1:8000/login']) !!}

  <p>AtlasSNSへようこそ</p>

  {{ Form::label('email') }}
  {{ Form::text('email',null,['class' => 'input']) }}
  {{ Form::label('password') }}
  {{ Form::password('password',['class' => 'input']) }}

  {{ Form::submit('ログイン') }}

  <p><a href="register">新規ユーザーの方はこちら</a></p>

  {!! Form::close() !!}

</x-logout-layout>
