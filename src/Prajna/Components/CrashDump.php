<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class CrashDump
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function destroy(){}
	public function get_uuid(){}
	public function get_all(){}
	public function get_VM(){}
	public function get_VDI(){}
	public function get_by_uuid(){}
	public function get_record(){}
}
