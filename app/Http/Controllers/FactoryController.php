<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactoryController extends Car_Honda
{
	private $response;
	private $carname;
	private $plateno;
	private $carbrand;

    public function main($brand,$cartype,$plateno)
	{
		$brand = ucwords($brand);
		
		$class= "App\Http\Controllers\Car_".$brand;

		$res = new FactoryController;

		if(class_exists($class))
		{
				
			$create_car = new $class;

			if($brand == "Honda")
			{
				$create_car->setcar($brand,$cartype,$plateno);

				return $create_car->getCar();
			}
			elseif($brand == "Nissan")
			{
				$create_car->setcar($brand,$cartype,$plateno);

				return $create_car->getCar();
			}
			else
			{
				$res->setresponse("No model found");

				return $res->getresponse();
			}
		}
		else{

			$res->setresponse("Not Exist");

			return $res->getresponse();
		}			

	}

    public function setresponse($resp)
    {
    	return $this->response = $resp;
    }

    public function getresponse()
    {
    	return $this->response;
    }
}
