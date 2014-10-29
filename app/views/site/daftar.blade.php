@extends('layouts.master')

@section('content')
<form action='daftar' method='post'>
	<div>
		<label for="username">Username</label>
		<input type="text" name="username" value='<?=Input::old('username')?>'>
		<span>{{$errors->first('username')}}</span>
	</div>
	<div>
		<label for="username">Password</label>
		<input type="password" name="password" value='<?=Input::old('password')?>'>
		<span>{{$errors->first('password')}}</span>
	</div>
	<button type="submit">Daftar</button>
</form>

@stop

