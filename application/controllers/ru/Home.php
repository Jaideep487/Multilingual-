<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct() 
	{
        parent::__construct();

        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
	$this->load->model('CommonModel', 'cm');
    	}


	public function index()
	{
		$data['pageTitle'] = "дом";
		$data['pageDesc'] = "помощник по туристическим достопримечательностям";
		$data['langCode'] = 'ru';
		$data['menus'] = $this->cm->getMainMenu($data['langCode'] );
		$data['content'] = $this->cm->getPageContent($data['langCode'], 1);
		$this->load->view('common/header', $data);
		$this->load->view('ru/home');
$this->load->view('common/footer');
	}
}
