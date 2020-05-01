<?php
define('PAGE_TITLE', 'Login');
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/system_config.php';
require_once ROOT_PATH . '/core/files.php';
Session::login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php if (defined('PAGE_TITLE')) {
			echo PAGE_TITLE . " | ";
		}
		if (defined('SYS_TITLE')) {
			echo SYS_TITLE;
		}
		?>
	</title>
	<link rel="stylesheet" href="/inc/assets/bootstrap/css/bootstrap.min.css">
	<script src="/inc/assets/jquery/jquery.min.js"></script>
</head>

<body class="bg-info">
	<div class="container">
		<div class="row justify-content-center align-items-center" style="min-height:100vh">
			<div class="col col-lg-5 col-md-7 mx-auto">
				<div class="card shadow">
					<form method="POST" action="login.php">
						<div class="card-body">
							<h3 class="mb-3 font-weight-bold">
								<?php if (defined('SYS_TITLE')) {
									echo SYS_TITLE;
								} ?> | Login
							</h3>
							<div class="form-group">
								<label for="username">Enter Username:</label>
								<input type="text" name="username" id="username" class="form-control">
							</div>
							<div class="form-group">
								<label for="password">Enter Password:</label>
								<input type="password" name="password" id="password" class="form-control">
							</div>
						</div>
						<div class="card-footer">
							<button class="btn btn-success btn-lg btn-block">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="/inc/assets/jquery-easing/jquery.easing.compatibility.js"></script>
	<script src="/inc/assets/jquery-easing/jquery.easing.min.js"></script>
	<script src="/inc/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>