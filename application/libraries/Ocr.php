<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//use thiagoalessio\TesseractOCR\TesseractOCR;
 require __DIR__ . '/vendor/autoload.php';
 
class ocr 
{
   function uploadToApi($target_file){
	   
	    /*$data = (new TesseractOCR("C:\\w3\\www\\deistechocr\\dist\\img\\uploads\\".$target_file))
            ->lang('eng')
            ->run();
		file_put_contents('C:\\w3\\www\\deistechocr\\dist\\img\\uploads\\text.txt', $data);
	    return file_get_contents('C:\\w3\\www\\deistechocr\\dist\\img\\uploads\\text.txt');*/
		
		require __DIR__ . '/vendor/autoload.php';
		$fileData = fopen('/var/www/deistechocr/dist/img/uploads'.$target_file, 'r');
		$client = new \GuzzleHttp\Client();
		try {
			$r = $client->request('POST', 'https://api.ocr.space/parse/image',[
				'headers' => ['apiKey' => 'c2a5d875a488957'],
				'multipart' => [
					[
						'name' => 'file',
						'contents' => $fileData
					]
				]
			], ['file' => $fileData]);
			$response =  json_decode($r->getBody(),true);
			if($response['ErrorMessage'] == "") {
				$respo = "";
				foreach($response['ParsedResults'] as $pareValue) {
					$respo .= str_replace("\n","<br>",$pareValue['ParsedText']);
				}
				return ["success"=>$respo,"error" =>""];
			} else {
				return ["success"=>"","error" =>$response['ErrorMessage']];
			}
		} catch(Exception $err) {
		   return ["success"=>"","error" =>$err->getMessage()];
		}
		
   }	   
	
}
?>
