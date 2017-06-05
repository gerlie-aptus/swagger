<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwaggerController extends Controller
{
	private $response;
    
    public function ping()
    {
		    		
 		$class = new SwaggerController;

 		$success = array(
 				"tags"		  => "status",
 				"description" => "Basic connectivity and version availability test",
 				"operationId" => "ping",
 				"reponses"    => array(204 => array("description"=>"Connectivity test successful"))
 			 );
 		
 		$class->setResponse($success);


 		return $class->getResponse();
    }

    public function accounts()
    {
    		
    }

    public function setResponse($resp)
    {
    	$this->response= $resp;
    }

    public function getResponse()
    {
    	return $this->response;
    }
}
