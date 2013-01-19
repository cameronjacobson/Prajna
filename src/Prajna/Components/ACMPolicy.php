<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class ACMPolicy
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_header(){}
	public function get_XML(){}
	public function get_map(){}
	public function get_binary(){}
	public function get_enforced_binary(){}
	public function get_VM_ssidref(){}
	public function get_all(){}
	public function get_uuid(){}
	public function get_record(){}
}
