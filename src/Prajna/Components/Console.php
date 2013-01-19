<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Console
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_all(){}
	public function get_uuid(){}
	public function get_protocol(){}
	public function get_location(){}
	public function get_VM(){}
	public function get_other_config(){}
	public function set_other_config(){}
	public function add_to_other_config(){}
	public function remove_from_other_config(){}
	public function create(){}
	public function destroy(){}
	public function get_by_uuid(){}
	public function get_record(){}
}
