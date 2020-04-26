<h2><?= esc($title); ?></h2>

<?php if (!empty($property) && is_array($property)) : ?>

	<?php foreach ($property as $property_item) : ?>

		<h3><?= esc($property_item['name']); ?></h3>

		<div class="main">
			<?= esc($property_item['body']); ?>
		</div>
		<p><a href="/property/<?= esc($property_item['slug'], 'url'); ?>">View article</a></p>

	<?php endforeach; ?>

<?php else : ?>

	<h3>No property</h3>

	<p>Unable to find any property for you.</p>

<?php endif ?>