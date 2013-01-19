<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Task
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function cancel($task){
		
	}

	public function get_all(){
		
	}

	public function get_uuid($task){
		
	}

	public function get_name_label($task){
		
	}

	public function get_name_description($task){
		
	}

	public function get_status($task){
		
	}

	public function get_session($task){
		
	}

	public function get_progress($task){
		
	}

	public function get_type($task){
		
	}

	public function get_result($task){
		
	}

	public function get_error_info($task){
		
	}

	public function get_allowed_operations($task){
		
	}

	public function get_by_uuid($uuid){
		
	}

	public function get_record($task){
		
	}

	public function get_by_name_label($label){
		
	}
}
