@extends('layouts.master')

@section('content')
<h1>Create course</h1>
<form action='tambah-course' method='post'>
	<?php var_dump($errors->all()); ?>
	<?= Form::token();?>
	
	<div>
		<label for="name">Faculty Name</label>
		<input type="text" name="name" value='<?=Input::old('username')?>'>
		<span>{{ $errors->first('username') }}</span>
	</div>
	<button type="submit">Add course</button>
</form>
@stop


