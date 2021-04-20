@include('partials.header')

<h2>サインアップ</h2>
<form action="/user/signup/post" method="post">
    名前:<br>
    <input name="name">
    @if ($errors->first('name'))
        <p class="validation">※{{$errors->first('name')}}</p>
    @endif
    <br>
    メールアドレス:<br>
    <input name="email">
    @if ($errors->first('email'))
        <p class="validation">※{{$errors->first('email')}}</p>
    @endif
    <br>
    パスワード:<br>
    <input name="password">
    @if ($errors->first('password'))
        <p class="validation">※{{$errors->first('password')}}</p>
    @endif
    {{ csrf_field() }}
    <button class="btn btn-success"> 送信 </button>
</form>