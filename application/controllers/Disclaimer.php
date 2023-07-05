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
		
		/*
		$config['upload_path'] = './dist/img/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';

        $this->load->library('upload', $config);

	  if (!$this->upload->do_upload('uploadImage')) {
            print_r($this->upload->display_errors());
        } else {
			$_SESSION["filename"] = $_FILES["uploadImage"]["name"];
			$_SESSION["image_upload"] = "<img src='".base_url()."dist/img/uploads/".$_SESSION["filename"]."' width='500px'/>";
			print "success";
			//print $_SESSION["image_upload"];
        }*/
		
		$uploadOk = 1;
		$target_dir = './dist/img/uploads/';
		$FileType = strtolower(pathinfo($_FILES["uploadImage"]["name"],PATHINFO_EXTENSION));
		
		$filename = $this->generateRandomString().'.'.$FileType;
		$_SESSION["filename"] = "";
		$_SESSION["image_upload"] = "";
		$target_file = $target_dir . $filename;
		// Check file size
		if ($_FILES["uploadImage"]["size"] > 5000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		if($FileType != "pdf" && $FileType != "png" && $FileType != "jpg") {
			echo "Sorry, please upload a pdf|png|jpg file";
			$uploadOk = 0;
		}
		if ($uploadOk == 1) {
	   
			if (move_uploaded_file($_FILES["uploadImage"]["tmp_name"], $target_file)) {
				//uploadToApi($target_file);
				$_SESSION["filename"] = $filename;
				$_SESSION["image_upload"] = "<img src='".base_url()."dist/img/uploads/".$_SESSION["filename"]."' width='485px'/>";

				if($FileType == "pdf"){
					$_SESSION["image_upload"] = "<embed src='".base_url()."dist/img/uploads/".$_SESSION["filename"]."'  type='application/pdf' width='485px'/>";
				}
				print "success";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		} 
	}
	
	public function process(){
		
		try{
		 //print str_replace("\n","<br>",$this->ocr->uploadToApi($_SESSION["filename"]));
		  $response = $this->ocr->uploadToApi($_SESSION["filename"]);
		  if ($response["success"] != ""){
			  print_r($response["success"]);
		  }else if($response["error"] != ""){
			  print_r($response["error"]);
		  }
		}catch(Exception $e){
			print "error";
		}
	}
	
	function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

}
