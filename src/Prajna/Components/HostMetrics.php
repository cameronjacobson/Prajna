<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class HostMetrics
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_all(){}
	public function get_uuid(){}
	public function get_memory_total(){}
	public function get_memory_free(){}
	public function get_last_updated(){}
	public function get_by_uuid(){}
	public function get_record(){}
}
