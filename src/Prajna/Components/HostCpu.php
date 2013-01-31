<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class HostCpu
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_all_records(){
		return $this->doCall('host_cpu.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($HostCpu){
		return $this->doCall('host_cpu.get_uuid',array(
			$this->session_id,
			$HostCpu
		));
	}

	public function get_host($HostCpu){
		return $this->doCall('host_cpu.get_host',array(
			$this->session_id,
			$HostCpu
		));
	}

	public function get_number($HostCpu){
		return $this->doCall('host_cpu.get_number',array(
			$this->session_id,
			$HostCpu
		));
	}

	public function get_vendor($HostCpu){
		return $this->doCall('host_cpu.get_vendor',array(
			$this->session_id,
			$HostCpu
		));
	}

	public function get_speed($HostCpu){
		return $this->doCall('host_cpu.get_speed',array(
			$this->session_id,
			$HostCpu
		));
	}

	public function get_modelname($HostCpu){
		return $this->doCall('host_cpu.get_modelname',array(
			$this->session_id,
			$HostCpu
		));
	}

	public function get_family($HostCpu){
		return $this->doCall('host_cpu.get_family',array(
			$this->session_id,
			$HostCpu
		));
	}

	public function get_model($HostCpu){
		return $this->doCall('host_cpu.get_model',array(
			$this->session_id,
			$HostCpu
		));
	}

	public function get_stepping($HostCpu){
		return $this->doCall('host_cpu.get_stepping',array(
			$this->session_id,
			$HostCpu
		));
	}

	public function get_flags($HostCpu){
		return $this->doCall('host_cpu.get_flags',array(
			$this->session_id,
			$HostCpu
		));
	}

	public function get_features($HostCpu){
		return $this->doCall('host_cpu.get_features',array(
			$this->session_id,
			$HostCpu
		));
	}

	public function get_utilisation($HostCpu){
		return $this->doCall('host_cpu.get_utilisation',array(
			$this->session_id,
			$HostCpu
		));
	}

	public function get_other_config($HostCpu){
		return $this->doCall('host_cpu.get_other_config',array(
			$this->session_id,
			$HostCpu
		));
	}

	public function set_other_config($HostCpu,Array $config){
		return $this->doCall('host_cpu.set_other_config',array(
			$this->session_id,
			$HostCpu,
			$config
		));
	}

	public function add_to_other_config($HostCpu,$key,$value){
		return $this->doCall('host_cpu.add_to_other_config',array(
			$this->session_id,
			$HostCpu,
			$key,
			$value
		));
	}

	public function remove_from_other_config($HostCpu,$key){
		return $this->doCall('host_cpu.remove_from_other_config',array(
			$this->session_id,
			$HostCpu,
			$key
		));
	}
}
