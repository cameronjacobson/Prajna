<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VBD
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function media_change(){}
	public function unplug(){}
	public function get_all(){}
	public function get_uuid(){}
	public function get_VM(){}
	public function get_VDI(){}
	public function get_device(){}
	public function set_device(){}
	public function get_bootable(){}
	public function set_bootable(){}
	public function get_mode(){}
	public function set_mode(){}
	public function get_type(){}
	public function set_type(){}
	public function get_currently_attached(){}
	public function get_status_code(){}
	public function get_status_detail(){}
	public function get_runtime_properties(){}
	public function get_qos_algorithm_type(){}
	public function set_qos_algorithm_type(){}
	public function get_qos_algorithm_params(){}
	public function set_qos_algorithm_params(){}
	public function add_to_qos_algorithm_params(){}
	public function remove_from_qos_algorithm_params(){}
	public function get_qos_supported_algorithms(){}
	public function get_metrics(){}
	public function create(){}
	public function destroy(){}
	public function get_by_uuid(){}
	public function get_record(){}
}
