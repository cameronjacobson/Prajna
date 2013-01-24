<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class ACMPolicy
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_header($xspolicy){
		return $this->doCall('ACMPolicy.get_header',array(
			$this->session_id,
			$xspolicy
		));
	}

	public function get_XML($xspolicy){
		return $this->doCall('ACMPolicy.get_xml',array(
			$this->session_id,
			$xspolicy
		));
	}

	public function get_map($xspolicy){
		return $this->doCall('ACMPolicy.get_map',array(
			$this->session_id,
			$xspolicy
		));
	}

	public function get_binary($xspolicy){
		return $this->doCall('ACMPolicy.get_binary',array(
			$this->session_id,
			$xspolicy
		));
	}

	public function get_enforced_binary($xspolicy){
		return $this->doCall('ACMPolicy.get_enforced_binary',array(
			$this->session_id,
			$xspolicy
		));
	}

	public function get_VM_ssidref($vm){
		return $this->doCall('ACMPolicy.get_VM_ssidref',array(
			$this->session_id,
			$vm
		));
	}

	public function get_all(){
		return $this->doCall('ACMPolicy.get_all',array(
			$this->session_id
		));
	}

	public function get_uuid($acmpolicy){
		return $this->doCall('ACMPolicy.get_uuid',array(
			$this->session_id,
			$acmpolicy
		));
	}

	public function get_record($xspolicy){
		return $this->doCall('ACMPolicy.get_record',array(
			$this->session_id,
			$xspolicy
		));
	}
}
