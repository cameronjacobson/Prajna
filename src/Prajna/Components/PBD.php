<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class PBD
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_all(){}
	public function get_host(){}
	public function get_SR(){}
	public function get_device_config(){}
	public function get_currently_attached(){}
	public function create(){}
	public function destroy(){}
	public function get_by_uuid(){}
	public function get_record(){}
}
