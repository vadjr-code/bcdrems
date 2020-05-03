<?php
define('PAGE_TITLE', 'Property Features');
require_once 'templates/header.php';
?>
<div class="p-3">
	<header>
		<h1 class="h5">Property Features</h1>
	</header>
	<main class="mt-4">
		<div class="row">
			<div class="col col-12 col-lg-4">
				<form method="post">
					<div class="form-group">
						<input type="text" name="property_type" id="property_type" placeholder="Property Features" class="form-control form-control-lg">
					</div>
					<div class="form-group">
						<div class="card icon-selector">
							<div class="card-header">
								Select Feature Icon
							</div>
							<div class="d-flex flex-wrap icon-selector-list"></div>
						</div>
					</div>
					<div class="form-group">
						<button class="btn btn-success"><i class="fa fa-save fa-fw"></i> Save Property Features</button>
					</div>
				</form>
			</div>
			<div class="col col-12 col-lg-8">
				<ul class="list-group">
					<li class="list-group-item">
						<i class="fa fa-trash fw"></i> - Cras justo odio
						<a href=""></a>
					</li>
				</ul>
			</div>
		</div>
	</main>
	<footer></footer>
</div>
<?php
require_once 'templates/footer.php';
?>