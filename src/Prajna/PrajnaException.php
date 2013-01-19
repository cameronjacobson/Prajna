<?php

namespace Prajna;

class PrajnaException extends \Exception{
	public function __construct($msg){
		if(is_array($msg)){
			$this->message = 'unknown error '.print_r($msg,true);
		}
		else{
			$this->message = $msg;
		}
	}
}
