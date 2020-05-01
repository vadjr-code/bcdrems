<?php
define('PAGE_TITLE', 'Add Property');
require_once 'templates/header.php';
?>
<div class="p-3">
	<header>
		<h1 class="h5">Add New Property</h1>
	</header>
	<main class="mt-4">
		<form method="POST">
			<div class="row">
				<div class="col col-12 col-lg-9">
					<div class="form-group">
						<input type="text" placeholder="Property Name" name="property_name" id="property_name" class="form-control form-control-lg">
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-7">
								Description:*
								<textarea name="property_desc" id="property_desc" class="description"></textarea>
							</div>
							<div class="col-lg-5">
								Location:*
								<div class="form-group">
									<div id="property_location" class="property_location"></div>
									<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
									<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
									<script>
										mapboxgl.accessToken = 'pk.eyJ1Ijoic2FnZWNvZGV4IiwiYSI6ImNrNnZ6eTd3ZzAyZXEzc29iNGk0YjV0M2kifQ.XaVxVmYumM6vw4zmVA08tw';
										var map = new mapboxgl.Map({
											container: 'property_location',
											style: 'mapbox://styles/mapbox/streets-v11',
											center: [122.9583955, 10.687105],
											zoom: 14
										});
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-12 col-lg-3">
					<div class="card mb-3">
						<div class="card-body">
							<p>Extra Settings:</p>
						</div>
						<div class="card-footer d-flex justify-content-end">
							<button class="btn btn-success" name="submit_property"><i class="fa fa-save fa-fw"></i> Save Property</button>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<p>Property Type:*</p>
						</div>
					</div>
				</div>
			</div>
		</form>
	</main>
	<footer></footer>
</div>
<?php
require_once 'templates/footer.php';
?>