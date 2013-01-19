<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class User
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_uuid(){}
	public function get_short_name(){}
	public function get_fullname(){}
	public function set_fullname(){}
	public function create(){}
	public function destroy(){}
	public function get_by_uuid(){}
	public function get_record(){}
}
