<?php
class Database
{
	private $select_query = "SELECT * FROM";
	public static function select_all_from($query)
	{
		$sql = $this->select_query;
	}
}
