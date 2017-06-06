<?php  
namespace App\Api\Controller;
use BaseController\Controller;

class index extends Controller {

	function __construct(){

	}

	Public function Index(){
		$buy= \App\Api\Model\Xy28_buy::get();
		foreach ($buy as $key => $value) {
			echo $value->no;
			echo ' '.$value->identify;
			echo '<hr/>';

		}
	}
}
?>