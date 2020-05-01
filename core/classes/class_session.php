<?php
class Session
{
	public static function check()
	{
		if (!isset($_SESSION['user_id'])) {
			$last_url_visited = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			header("Location: /login.php?r=" . $last_url_visited);
		}
		if (isset($_GET['logout'])) {
			session_unset();
			session_destroy();
			header("Location:/login.php");
		}
	}
	public static function login()
	{
		if (isset($_SESSION['user_id'])) {
			$last_url_visited = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			if (isset($_GET['r'])) {
				header("Location: " . $last_url_visited);
			} else {
				header('Location:/admin/');
			}
		}
	}
	public function create($user_id)
	{
		$_SESSION['user_id'] = $user_id;
	}
}
$session = new Session;
