<?php

namespace App\Controllers;

use App\Models\PropertyModel;
use CodeIgniter\Controller;

class Property extends Controller
{
	public function index()
	{
		$model = new PropertyModel();
		$data = [
			'property'  => $model->getProperties(),
			'name' => 'Property archive',
		];

		echo view('templates/header', $data);
		echo view('property/overview', $data);
		echo view('templates/footer', $data);
	}

	public function view($slug = NULL)
	{
		$model = new PropertyModel();

		$data['property'] = $model->getProperties($slug);

		if (empty($data['property'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the property item: ' . $slug);
		}

		$data['name'] = $data['property']['name'];

		echo view('templates/header', $data);
		echo view('property/view', $data);
		echo view('templates/footer', $data);
	}

	public function create()
	{
		$model = new PropertyModel();

		if (!$this->validate([
			'name' => 'required|min_length[3]|max_length[255]',
			'body'  => 'required'
		])) {
			echo view('templates/header', ['title' => 'Create a news item']);
			echo view('property/create');
			echo view('templates/footer');
		} else {
			$model->save([
				'name' => $this->request->getVar('name'),
				'slug'  => url_title(strtolower($this->request->getVar('name'))),
				'body'  => $this->request->getVar('body'),
			]);

			echo view('property/success');
		}
	}
}
