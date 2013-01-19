<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class SR
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_supported_types(){}
	public function get_all(){}
	public function get_uuid(){}
	public function get_name_label(){}
	public function set_name_label(){}
	public function get_name_description(){}
	public function set_name_description(){}
	public function get_VDIs(){}
	public function get_PBDs(){}
	public function get_virtual_allocation(){}
	public function get_physical_utilisation(){}
	public function get_physical_size(){}
	public function get_type(){}
	public function get_content_type(){}
	public function get_by_uuid(){}
	public function get_record(){}
	public function get_by_name_label(){}
}
