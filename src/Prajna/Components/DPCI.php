<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class DPCI
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_all(){}
	public function get_uuid(){}
	public function get_VM(){}
	public function get_PPCI(){}
	public function get_hotplug_slot(){}
	public function get_virtual_domain(){}
	public function get_virtual_bus(){}
	public function get_virtual_func(){}
	public function get_virtual_name(){}
	public function create(){}
	public function destroy(){}
	public function get_by_uuid(){}
	public function get_record(){}
}
