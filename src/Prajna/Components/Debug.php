<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Debug
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_all(){}
	public function return_failure(){}
	public function create(){}
	public function destroy(){}
	public function get_by_uuid(){}
	public function get_record(){}
}
