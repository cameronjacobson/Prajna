<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class CrashDump
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function destroy($crashdump){
		return $this->doCall('crashdump.destroy',array(
			$this->session_id,
			$crashdump
		));
	}

	public function get_all(){
		return $this->doCall('crashdump.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('crashdump.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($crashdump){
		return $this->doCall('crashdump.get_uuid',array(
			$this->session_id,
			$crashdump
		));
	}

	public function get_VM($crashdump){
		return $this->doCall('crashdump.get_VM',array(
			$this->session_id,
			$crashdump
		));
	}

	public function get_VDI($crashdump){
		return $this->doCall('crashdump.get_VDI',array(
			$this->session_id,
			$crashdump
		));
	}

	public function get_other_config($VDI){
		return $this->doCall('crashdump.get_other_config',array(
			$this->session_id,
			$VDI
		));
	}

	public function set_other_config($VDI,Array $config){
		return $this->doCall('crashdump.set_other_config',array(
			$this->session_id,
			$VDI,
			$config
		));
	}

	public function add_to_other_config($VDI,$key,$value){
		return $this->doCall('crashdump.add_to_other_config',array(
			$this->session_id,
			$VDI,
			$key,
			$value
		));
	}

	public function remove_from_other_config($VDI,$key){
		return $this->doCall('crashdump.remove_from_other_config',array(
			$this->session_id,
			$VDI,
			$key
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('crashdump.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($crashdump){
		return $this->doCall('crashdump.get_record',array(
			$this->session_id,
			$crashdump
		));
	}
}
