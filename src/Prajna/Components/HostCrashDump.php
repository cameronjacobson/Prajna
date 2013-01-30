<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class HostCrashDump
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function destroy($host_crashdump){
		return $this->doCall('host_crashdump.destroy',array(
			$this->session_id,
			$host_crashdump
		));
	}

	public function upload($host_crashdump,$url,Array $options){
		return $this->doCall('host_crashdump.upload',array(
			$this->session_id,
			$host_crashdump,
			$url,
			$options
		));
	}

	public function get_all(){
		return $this->doCall('host_crashdump.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('host_crashdump.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($host_crashdump){
		return $this->doCall('host_crashdump.get_uuid',array(
			$this->session_id,
			$host_crashdump
		));
	}

	public function get_host($host_crashdump){
		return $this->doCall('host_crashdump.get_host',array(
			$this->session_id,
			$host_crashdump
		));
	}

	public function get_timestamp($host_crashdump){
		return $this->doCall('host_crashdump.get_timestamp',array(
			$this->session_id,
			$host_crashdump
		));
	}

	public function get_size($host_crashdump){
		return $this->doCall('host_crashdump.get_size',array(
			$this->session_id,
			$host_crashdump
		));
	}

	public function get_other_config($host_crashdump){
		return $this->doCall('host_crashdump.get_other_config',array(
			$this->session_id,
			$host_crashdump
		));
	}

	public function set_other_config($host_crashdump,Array $config){
		return $this->doCall('host_crashdump.set_other_config',array(
			$this->session_id,
			$host_crashdump,
			$config
		));
	}

	public function add_to_other_config($host_crashdump,$key,$value){
		return $this->doCall('host_crashdump.add_to_other_config',array(
			$this->session_id,
			$host_crashdump,
			$key,
			$value
		));
	}

	public function remove_from_other_config($host_crashdump,$key){
		return $this->doCall('host_crashdump.remove_from_other_config',array(
			$this->session_id,
			$host_crashdump,
			$key
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('host_crashdump.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($host_crashdump){
		return $this->doCall('host_crashdump.get_record',array(
			$this->session_id,
			$host_crashdump
		));
	}
}
