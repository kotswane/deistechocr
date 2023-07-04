<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use thiagoalessio\TesseractOCR\TesseractOCR;

class ocr 
{
   function convert($target_file){
	   
	    $data = (new TesseractOCR("C:\\w3\\www\\deistechocr\\dist\\img\\uploads\\".$target_file))
            ->lang('eng')
            ->run();
		file_put_contents('C:\\w3\\www\\deistechocr\\dist\\img\\uploads\\text.txt', $data);
	    return file_get_contents('C:\\w3\\www\\deistechocr\\dist\\img\\uploads\\text.txt');
		
   }	   
	
}
?>
