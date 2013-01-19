<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VMGuestMetrics
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_all(){}
	public function get_uuid(){}
	public function get_os_version(){}
	public function get_PV_drivers_version(){}
	public function get_memory(){}
	public function get_disks(){}
	public function get_networks(){}
	public function get_other(){}
	public function get_last_updated(){}
	public function get_by_uuid(){}
	public function get_record(){}
}
