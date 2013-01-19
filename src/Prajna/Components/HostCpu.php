<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class HostCpu
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_all(){}
	public function get_uuid(){}
	public function get_host(){}
	public function get_number(){}
	public function get_vendor(){}
	public function get_speed(){}
	public function get_modelname(){}
	public function get_stepping(){}
	public function get_flags(){}
	public function get_features(){}
	public function get_utilisation(){}
	public function get_by_uuid(){}
	public function get_record(){}
}
