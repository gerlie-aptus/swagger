<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Car_Nissan extends FactoryController
{
    
   public function setCar($car_brand,$car_name,$plate_no)
	{
		$this->carbrand = $car_brand;
		$this->carname  = $car_name;
		$this->plateno  = $plate_no;
	}

	public function getCar()
	{
		$data = array(
				$this->carbrand,
				$this->carname,
				$this->plateno
			);

		return $data;
	}
}
