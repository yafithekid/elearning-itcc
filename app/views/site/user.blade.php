@extends('layouts.master')

@section('content')
<?php foreach($users as $user): ?>
	<div> <?= $user->username; ?>
		<?= $user->fullname; ?>
	</div>
<?php endforeach; ?>

<?= $users->links(); ?>
@stop