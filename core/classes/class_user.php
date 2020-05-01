<?php
class User
{
	public $table = DB_PREFIX . 'users';

	public function has_credential($username, $password)
	{
		$database = new Database();
		$esc_uname = $database->esc($username);
		$esc_upass = $database->esc(sha1($password));
		$sql = "SELECT * FROM " . $this->table . " WHERE uname='$esc_uname' AND upass='$esc_upass' LIMIT 1";
		$query = $database->query($sql);
		if ($query->num_rows > 0) {
			$user = $query->fetch_assoc();
			return $user['id'];
		} else {
			return FALSE;
		}
	}
}
