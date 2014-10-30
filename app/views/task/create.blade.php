@extends('layouts.master')

@section('content')
<h1>Daftar</h1>
<form action='daftar' method='post'>
	<?= Form::token();?>
	<div>
		<label for="course_id">Kuliah</label>
		<input type="text" name="course_id" value='<?=Input::old('course_id')?>'>
		<span>{{$errors->first('course_id')}}</span>
	</div>
	<div>
		<label for="deadline">Deadline</label>
		<input type="text" name="deadline" id="deadline">
		<span>{{$errors->first('deadline')}}</span>
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
{{ HTML::script('js/jquery.datetimepicker.js'); }}	
{{ Html::style('css/jquery.datetimepicker.css');}}
<script type="text/javascript">
	$('#deadline').datetimepicker({"format":'Y-m-d H:i:00'});
	</script>

@stop

	