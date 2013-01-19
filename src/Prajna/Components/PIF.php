<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class PIF
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function create_VLAN(){}
	public function destroy(){}
	public function get_all(){}
	public function get_uuid(){}
	public function get_device(){}
	public function set_device(){}
	public function get_network(){}
	public function get_host(){}
	public function get_MAC(){}
	public function set_MAC(){}
	public function get_MTU(){}
	public function set_MTU(){}
	public function get_VLAN(){}
	public function set_VLAN(){}
	public function get_metrics(){}
	public function get_by_uuid(){}
	public function get_record(){}
}
