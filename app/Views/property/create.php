<h2><?= esc($title); ?></h2>

<?= \Config\Services::validation()->listErrors(); ?>

<form method="POST" action="/property/create">

	<label for="title">Title</label>
	<input type="input" name="name" /><br />

	<label for="body">Text</label>
	<textarea name="body"></textarea><br />

	<input type="submit" name="submit" value="Create news item" />

</form>