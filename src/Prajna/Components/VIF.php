<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VIF
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}
}
