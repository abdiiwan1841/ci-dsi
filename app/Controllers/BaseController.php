<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['Rupiah_helper'];
	protected $KategoriModel;
	protected $LokasiModel;
	protected $SatuanModel;
	protected $VendorModel;
	protected $ProdukModel;

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();

		$this->db = \Config\Database::connect('default');

		$this->KategoriModel = new \App\Models\Category_model();

		$this->LokasiModel = new \App\Models\Location_model();
		
		$this->SatuanModel = new \App\Models\Unit_model();

		$this->VendorModel = new \App\Models\Vendor_model();

		$this->ProdukModel = new \App\Models\Product_model();
	}
}
