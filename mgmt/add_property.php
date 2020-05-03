<?php
define('PAGE_TITLE', 'Add Property');
require_once 'templates/header.php';
?>
<div class="p-3">
	<header>
		<h1 class="h5">New Property</h1>
	</header>
	<main class="mt-3">
		<form method="POST">
			<div class="row">
				<div class="col col-12 col-lg-9">
					<div class="form-group">
						<input type="text" placeholder="Property Name" name="property_name" id="property_name" class="form-control form-control-lg">
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-5">
								<textarea name="property_desc" id="property_desc" class="description"></textarea>
								<div class="mt-3">
									<p>Property Price:</p>
									<input type="number" name="regular_price" class="mb-2 form-control" id="regular_price" placeholder="Regular Price">
									<input type="number" name="regular_price" id="regular_price" class="form-control" placeholder="Sale Price">
								</div>
							</div>
							<div class="col-lg-7">
								<div class="row">
									<div class="form-group col-lg-6">
										<select type="text" name="city" id="city" class="form-control">
											<option value="Bacolod">Bacolod</option>
										</select>
									</div>
									<div class="form-group col-lg-6">
										<select type="text" name="barangay" id="barangay" class="form-control">
											<option value="Bacolod">Bacolod</option>
										</select>
									</div>
									<div class="form-group col-12">
										<input type="text" name="street" id="street" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div id="map" class="location_search">
										<button type="button" class="marker btn btn-default">
											<i class="fa fa-map-marker-alt fa-fw"></i>
										</button>
										<input type="hidden" class="property_lat" name="property_lat">
										<input type="hidden" class="property_lng" name="property_lng">
										<input type="hidden" class="property_zoom" name="property_zoom">
										<div id="geocoder"></div>
										<div id="coordinates" class="coordinates"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group mb-3">
						<h2 class="h5">
							Main Features
						</h2>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-4">
								<div class="form-group">
									<label for="">Area:</label>
									<input type="number" name="area" value="0" min="0" class="form-control">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label for="">Beds:</label>
									<input type="number" name="beds" value="0" min="0" class="form-control">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label for="">Baths:</label>
									<input type="number" name="baths" value="0" min="0" class="form-control">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label for="">Size:</label>
									<input type="number" name="size" value="0" min="0" class="form-control">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label for="">Floors:</label>
									<input type="number" name="floors" value="0" min="0" class="form-control">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label for="">Garage:</label>
									<input type="number" name="garage" value="0" min="0" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group mb-3">
						<h2 class="h5">
							Additional Features
						</h2>
					</div>
					<div class="form-group">
						<textarea type="text" rowspan="5" class="form-control"></textarea>
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