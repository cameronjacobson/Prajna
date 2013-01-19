<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VTPM
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_uuid(){}
	public function get_VM(){}
	public function get_backend(){}
	public function get_other_config(){}
	public function set_other_config(){}
	public function get_runtime_properties(){}
	public function create(){}
	public function destroy(){}
	public function get_by_uuid(){}
	public function get_record(){}
}
