<?php
define('PAGE_TITLE', 'Property Type');
require_once 'templates/header.php';
?>
<div class="p-3">
	<header>
		<h1 class="h5">Property Type</h1>
	</header>
	<main class="mt-3">
		<div class="row">
			<div class="col col-12 col-lg-4">
				<form data-submit="property_type">
					<div class="form-group">
						<input type="text" name="property_type" id="property_type" placeholder="Property Type" class="form-control form-control-lg" required>
					</div>
					<div class="form-group">
						<textarea name="property_desc" id="property_desc" class="description" cols="30" rows="10"></textarea>
					</div>
					<div class="form-group">
						<button name="submit" class="btn btn-success"><i class="fa fa-save fa-fw"></i> Save Property Type</button>
					</div>
				</form>
			</div>
			<div class="col col-12 col-lg-8">
				<table class="table table-hover table-striped bg-white table-bordered">
					<thead>
						<tr>
							<th>Type</th>
							<th>Description</th>
							<th>Count</th>
						</tr>
					</thead>
					<tbody data-output="property_type"></tbody>
				</table>
			</div>
		</div>
	</main>
	<footer></footer>
</div>
<?php
require_once 'templates/footer.php';
?>