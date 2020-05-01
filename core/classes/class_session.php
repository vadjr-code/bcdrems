<?php
class Session
{
	function __construct()
	{
	}
	public static function check()
	{
		if (!isset($_SESSION['user_id'])) {
			$last_url_visited = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			header("Location: /login.php?r=" . $last_url_visited);
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
	public static function create($user_id)
	{
		$_SESSION['user_id'] = $user_id;
	}
	public static function end()
	{
		if (isset($_GET['logout'])) {
			session_unset();
			session_destroy();
			header("Location:/login.php");
		}
	}
}
