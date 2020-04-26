<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertyModel extends Model
{
	protected $table = 'properties';
	protected $allowedFields = ['name', 'slug', 'body'];

	public function getProperties($slug = false)
	{
		if ($slug === false) {
			return $this->findAll();
		}

		return $this->asArray()
			->where(['slug' => $slug])
			->first();
	}
}
