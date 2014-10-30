<?= Form::open(['url' => 'tugas/submit', 'files' => true]); ?>
	<?= Form::token(); ?>
	<div>
		<label for='file'>File upload</label>
		<input type="file" name="file"/>
	</div>
	<div>
		<button type='submit'>Upload</button>
	</div>
<?= Form::close(); ?>