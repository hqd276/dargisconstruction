<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header extends MX_Controller{
	
	public function __construct(){
		parent::__construct();

	}
	
	public function index($page = null){
		$this->load->model(array('admin/modelcategory','admin/modelnews','admin/modelvideo'));
		$data = array();
		
		$cat_news = array();
		$cat_product = array();
		$categories = $this->modelcategory->getCategories(array('status'=>1),null," ORDER BY `order`");
		
		foreach ($categories as $key => $value) {
			if ($value['type']==1){
				$cat_product[] = $value;
			}else if ($value['type']==0){
				$cat_news[] = $value;
			}
		}
		$data['cat_news'] = $cat_news;
		$data['cat_product'] = $cat_product;

		$video = $this->modelvideo->getVideo('',1,'id DESC');
		$data['video'] = $video[0];

		$data['page'] = $page;

		$this->load->model(array('admin/modelsetting'));

		$setting = $this->modelsetting->getSetting(null);
		$setting = add_array_key('key',$setting);
		foreach ($setting as $key => $value) {
			$setting[$key]['data'] = json_decode($value['value']);
		}
		$data['setting'] = $setting;

		return $data;

		// $this->template->load_view('header',$data);

		// $this->template->build('header',$data);
	}
	
}
