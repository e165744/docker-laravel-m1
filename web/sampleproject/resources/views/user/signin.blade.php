@include('partials.header')

<h2>ログイン</h2>
<form action="/user/signin/post" method="post">
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
    <button class="btn btn-success"> ログイン </button>
</form>