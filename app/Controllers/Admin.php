<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class Admin extends Controller
{
	public function index()
	{
		$data['title'] = 'Dashboard';
		echo view('templates/admin_header', $data);
		echo view('admin/dashboard', $data);
		echo view('templates/admin_footer', $data);
	}
	public function view($page = 'login')
	{
		if (!is_file(APPPATH . '/Views/admin/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		echo view('templates/admin_header', $data);
		echo view('admin/' . $page, $data);
		echo view('templates/admin_footer', $data);
	}
}
