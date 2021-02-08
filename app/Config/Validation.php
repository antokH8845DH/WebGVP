<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $register = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
		'repeatPassword' => [
			'rules' => 'required|matches[password]',
		],
	];

	public $register_errors = [
		'username' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
		'repeatPassword' => [
			'required' => '{field} Harus Diisi',
			'matches' => '{field} Tidak Match Dengan Password'
		],
	];
	public $login = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
	];

	public $login_errors = [
		'username' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
	];
	public $add_product = [
		'subCategory' => [
			'rules' => 'required|min_length[3]',
		],
	];
	public $add_product_errors = [
		'subCategory' => [
			'required' => 'Category harus diisi',

			'min_length' => '{field} Minimal 5 Karakter',

		],
	];
	public $instrument = [
		'idProductSubCategory' => [
			'rules' => 'required',
		],
		'product_name' => [
			'rules' => 'required|min_length[3]',
		],
		// 'product_tpye' => [
		// 	'rules' => 'required|min_length[3]',
		// ],
		'product_brand' => [
			'rules' => 'required|min_length[3]',
		],
		'product_description' => [
			'rules' => 'required|min_length[3]',
		],
		'product_specification' => [
			'rules' => 'required|min_length[3]',
		],
	];
	public $instrument_errors = [
		'idProductSubCategory' => [
			'required' => 'Category harus diisi',
		],
		'product_name' => [
			'required' => 'Nama Produk harus diisi',
		],
		// 'product_tpye' => [
		// 	'required' => 'Tipe Produk harus diisi',
		// ],
		'product_brand' => [
			'required' => 'Brand Produk harus diisi',
		],
		'product_description' => [
			'required' => 'Deskripsi harus diisi',
		],
		'product_specification' => [
			'required' => 'Spesifikasi harus diisi',
		],
	];
}
