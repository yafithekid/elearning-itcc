@section('content')
<h1>Login</h1>
<form action='login' method='post'>
	<?= Form::token();?>
	
	<div>
		<label for="username">Username</label>
		<input type="text" name="username" value='<?=Input::old('username')?>'>
		<span>{{$errors->first('username')}}</span>
	</div>
	<div>
		<label for="username">Password</label>
		<input type="password" name="password">
		<span>{{$errors->first('password')}}</span>
	</div>
	<button type="submit">Login</button>
</form>
Belum punya akun? Silakan <a href='daftar'>daftar disini</a>
@stop


