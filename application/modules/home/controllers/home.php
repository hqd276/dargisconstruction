<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller{
	
	public function __construct(){
		parent::__construct();
		$data = Modules::run('header','home');
		$this->template->set_partial('header','header',$data );
		$this->template->set_partial('footer','footer',$data );
	}
	
	public function index(){
		$dataR = Modules::run('right');
		$this->template->set_partial('right','right',$dataR);

		$data = array();

		$this->load->model(array('admin/modelbanner','admin/modelproduct','admin/modelcategory','admin/modelgallery'));

		$categories = $this->modelcategory->getCategories(array('status'=>1,'type'=>1));
		foreach ($categories as $key => $value) {
			$list_product = $this->modelproduct->getProduct(array('category_id'=>$value['id']),' LIMIT 0,4');
			$categories[$key]['list_product'] = $list_product;
		}
		$data['categories'] = $categories;

		$banners = $this->modelbanner->getBanner(array('position'=>0));
		$data['banners'] = $banners;

		$gallery = $this->modelgallery->getGallery(array('status'=>1));
		
		$data['gallery'] = $gallery;

		$this->template->build('home',$data);
	}
}
