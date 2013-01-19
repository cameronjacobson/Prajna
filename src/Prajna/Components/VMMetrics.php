<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VMMetrics
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_all(){}
	public function get_uuid(){}
	public function get_memory_actual(){}
	public function get_VCPUs_number(){}
	public function get_VCPUs_utilisation(){}
	public function get_VCPUs_CPU(){}
	public function get_VCPUs_params(){}
	public function get_VCPUs_flags(){}
	public function get_state(){}
	public function get_start_time(){}
	public function get_last_updated(){}
	public function get_by_uuid(){}
	public function get_record(){}
}
