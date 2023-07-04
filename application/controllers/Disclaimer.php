<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disclaimer extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	 
	private $client;
	private $reports;
	private $reports_type;
	
	public function  __construct(){
		parent::__construct();
		
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		$this->load->model("Auditlog_model");
		$this->reports = $this->Report_model->list_reports();
		$this->reports_type = $this->Report_type_model->list_reports_type();	
	 }
	 
	
	public function index(){
		$data["errorMessage"]="";
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		$data = array('id'=>$this->session->userdata('username'),'site'=>'tracing portal prod');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}

		$this->load->view("disclaimer/index",$data);
	}	
	
	public function upload(){
		
		$config['upload_path'] = '/var/www/deistechocr/dist/img/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';

        $this->load->library('upload', $config);

	  if (!$this->upload->do_upload('uploadImage')) {
            print_r($this->upload->display_errors());
        } else {
			$_SESSION["filename"] = $_FILES["uploadImage"]["name"];
			$_SESSION["image_upload"] = "<img src='".base_url()."dist/img/uploads/".$_SESSION["filename"]."'/>";
			print "success";
        }
	}
	
	public function process(){
		
		try{
		 print str_replace("\n","<br>",$this->ocr->convert($_SESSION["filename"]));
		}catch(Exception $e){
			print "error";
		}
	}

}
