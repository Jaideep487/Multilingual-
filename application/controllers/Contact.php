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
		$data['pageTitle'] = "Contact";
		$data['pageDesc'] = "Tourist Attraction Helper";
		$data['langCode'] = 'en';
		$data['menus'] = $this->cm->getMainMenu($data['langCode'] );
		$data['content'] = $this->cm->getPageContent($data['langCode'], 3);
		$this->load->view('common/header', $data);
		$this->load->view('en/contact');
		$this->load->view('common/footer');
	}

	public function doaddcontact()
	{
	$name = $this->input->post('name');
	$email = $this->input->post('email');
	$message = $this->input->post('message');
	
	$data = [
	'name' => $name,
	'email' => $email,
	'message' => $message
	];
	
	$insert_data = $this->cm->doAddContact($data);
	if ($insert_data){
		redirect($_SERVER['HTTP_REFERER']);
		}
	}
}
