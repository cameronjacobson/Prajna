<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class HostMetrics
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_all(){
		return $this->doCall('host_metrics.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('host_metrics.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($HostMetrics){
		return $this->doCall('host_metrics.get_uuid',array(
			$this->session_id,
			$HostMetrics
		));
	}

	public function get_memory_total($HostMetrics){
		return $this->doCall('host_metrics.get_memory_total',array(
			$this->session_id,
			$HostMetrics
		));
	}

	public function get_live($HostMetrics){
		return $this->doCall('host_metrics.get_live',array(
			$this->session_id,
			$HostMetrics
		));
	}

	public function get_last_updated($HostMetrics){
		return $this->doCall('host_metrics.get_last_updated',array(
			$this->session_id,
			$HostMetrics
		));
	}

	public function get_other_config($HostMetrics){
		return $this->doCall('host_metrics.get_other_config',array(
			$this->session_id,
			$HostMetrics
		));
	}
	public function set_other_config($HostMetrics,Array $config){
		return $this->doCall('host_metrics.set_other_config',array(
			$this->session_id,
			$HostMetrics,
			$config
		));
	}
	public function add_to_other_config($HostMetrics,$key,$value){
		return $this->doCall('host_metrics.add_to_other_config',array(
			$this->session_id,
			$HostMetrics,
			$key,
			$value
		));
	}
	public function remove_from_other_config($HostMetrics,$key){
		return $this->doCall('host_metrics.remove_from_other_config',array(
			$this->session_id,
			$HostMetrics,
			$key
		));
	}


	public function get_by_uuid($uuid){
		return $this->doCall('host_metrics.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($HostMetrics){
		return $this->doCall('host_metrics.get_record',array(
			$this->session_id,
			$HostMetrics
		));
	}
}
