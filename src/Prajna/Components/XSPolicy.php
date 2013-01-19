<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class XSPolicy
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function get_xstype(){}
	public function set_xstype(){}
	public function reset_xspolicy(){}
	public function get_xspolicy(){}
	public function rm_xsbootpolicy(){}
	public function get_labeled_resources(){}
	public function set_resource_label(){}
	public function get_resource_label(){}
	public function can_run(){}
	public function get_all(){}
	public function get_uuid(){}
	public function get_record(){}
}
