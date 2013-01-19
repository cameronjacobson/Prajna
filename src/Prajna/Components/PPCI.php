<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class PPCI
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_all(){}
	public function get_uuid(){}
	public function get_host(){}
	public function get_domain(){}
	public function get_bus(){}
	public function get_slot(){}
	public function get_func(){}
	public function get_name(){}
	public function get_vendor_id(){}
	public function get_vendor_name(){}
	public function get_device_id(){}
	public function get_device_name(){}
	public function get_revision_id(){}
	public function get_class_code(){}
	public function get_class_name(){}
	public function get_subsystem_vendor_id(){}
	public function get_subsystem_vendor_name(){}
	public function get_subsystem_id(){}
	public function get_subsystem_name(){}
	public function get_driver(){}
	public function get_by_uuid(){}
	public function get_record(){}
}
