<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
@if(Auth::check())
<li><a href="{{route('logout')}}">ログアウト</a></li>
@else
<li><a href="{{route('signup')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> 新規登録</a></li>
<li><a href="{{route('signin')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ログイン</a></li>
@endif
</ul>
</div><!-- /.navbar-collapse -->
