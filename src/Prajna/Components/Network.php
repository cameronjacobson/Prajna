<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Network
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
	public function get_VIFs(){}
	public function get_PIFs(){}
	public function get_default_gateway(){}
	public function set_default_gateway(){}
	public function get_default_netmask(){}
	public function set_default_netmask(){}
	public function get_other_config(){}
	public function set_other_config(){}
	public function add_to_other_config(){}
	public function remove_from_other_config(){}
	public function create(){}
	public function destroy(){}
	public function get_by_uuid(){}
	public function get_record(){}
	public function get_by_name_label(){}
}
