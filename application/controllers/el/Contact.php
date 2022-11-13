<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


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
		$data['pageTitle'] = "Επικοινωνία";
		$data['pageDesc'] = "βοηθός τουριστικών αξιοθέατων";
		$data['langCode'] = 'el';
		$data['menus'] = $this->cm->getMainMenu($data['langCode'] );
		$data['content'] = $this->cm->getPageContent($data['langCode'], 3);
		$this->load->view('common/header', $data);
		$this->load->view('el/home');
		$this->load->view('common/footer');
	}
}
