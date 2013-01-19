<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VDI
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_all(){}
	public function get_uuid(){}
	public function get_name_label(){}
	public function set_name_label(){}
	public function get_name_description(){}
	public function set_name_description(){}
	public function get_SR(){}
	public function get_VBDs(){}
	public function get_crash_dumps(){}
	public function get_virtual_size(){}
	public function set_virtual_size(){}
	public function get_physical_utilisation(){}
	public function get_type(){}
	public function get_sharable(){}
	public function set_sharable(){}
	public function get_read_only(){}
	public function set_read_only(){}
	public function get_other_config(){}
	public function set_other_config(){}
	public function add_to_other_config(){}
	public function remove_from_other_config(){}
	public function set_security_label(){}
	public function get_security_label(){}
	public function create(){}
	public function destroy(){}
	public function get_by_uuid(){}
	public function get_record(){}
	public function get_by_name_label(){}
}
