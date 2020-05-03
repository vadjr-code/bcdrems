<?php
class Database
{
	public $gb_conn;

	function __construct()
	{
		$this->open_db_conn();
	}
	public function open_db_conn()
	{
		$this->gb_conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	}

	public function query($sql)
	{
		return mysqli_query($this->gb_conn, $sql);
	}

	public function esc($str)
	{
		return mysqli_real_escape_string($this->gb_conn, $str);
	}

	public function close()
	{
		return mysqli_close($this->gb_conn);
	}
}
