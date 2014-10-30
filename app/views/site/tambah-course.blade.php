@extends('layouts.master')

@section('content')
<h1>Create course</h1>
<form action='tambah-course' method='post'>
	<?php var_dump($errors->all()); ?>
	<?= Form::token();?>
	
	<div>
		<label for="name">Course Name</label>
		<input type="text" name="name" value='<?=Input::old('username')?>'>
		<span>{{$errors->first('username')}}</span>
	</div>
	<div>
		<label for="semester">Semester</label>
		<input type="text" name="semester" value='<?=Input::old('semester')?>'>
		<span>{{$errors->first('semester')}}</span>
	</div>
	<div>
		<label for="description">Description</label>
		<input type="text" name="description" value='<?=Input::old('description')?>'>
		<span>{{$errors->first('description')}}</span>
	</div>
	<input type="hidden" name="department_id" value='<?=1?>'>
	<button type="submit">Add course</button>
</form>
@stop


