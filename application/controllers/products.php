<?php
class products extends CI_Controller {
	private $product_id;
 
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('products_model');
	}

	public function index()
	{
	 $data['portfolio'] = $this->products_model->get_product();
     $data['title'] = 'Products';

	$this->load->view('header', $data);
	$this->load->view('products', $data);
	$this->load->view('footer');
	}

	public function reviewproduct($product_id){

      $data['portfolio'] = $this->products_model->get_oneproduct($product_id);
      $data['title'] = 'Product:';
 	
 	$this->load->view('reviewproduct', $data);
	$this->load->view('footer');

	}
}