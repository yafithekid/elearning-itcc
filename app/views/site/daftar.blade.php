@extends('layouts.master')

@section('content')
<h1>Daftar</h1>
<form action='daftar' method='post'>
	<?= Form::token();?>
	<?php var_dump($errors->all()); ?>
	<div>
		<label for="username">Username</label>
		<input type="text" name="username" value='<?=Input::old('username')?>'>
		<span>{{$errors->first('username')}}</span>
	</div>
	<div>
		<label for="password">Password</label>
		<input type="password" name="password">
		<span>{{$errors->first('password')}}</span>
	</div>
	<div>
		<label for="email">Email</label>
		<input type="email" name="email" value='<?=Input::old('email')?>'>
		<span>{{$errors->first('email')}}</span>
	</div>
	<div>
		<label for="fullname">Fullname</label>
		<input type="text" name="fullname" value='<?=Input::old('fullname')?>'>
		<span>{{$errors->first('fullname')}}</span>
	</div>
	<div>
		<label for="school">School</label>
		<input type="text" name="school" value='<?=Input::old('school')?>'>
		<span>{{$errors->first('school')}}</span>
	</div>
	<button type="submit">Daftar</button>
</form>

@stop

