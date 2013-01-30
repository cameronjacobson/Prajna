<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Auth
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_subject_identifier($subject_name){
		return $this->doCall('auth.get_subject_identifier',array(
			$this->session_id,
			$subject_name
		));
	}

	public function get_subject_information_from_identifier($subject_identifier){
		return $this->doCall('auth.get_subject_information_from_identifier',array(
			$this->session_id,
			$subject_identifier
		));
	}

	public function get_group_membership($subject_identifier){
		return $this->doCall('auth.get_group_membership',array(
			$this->session_id,
			$subject_identifier
		));
	}
}
