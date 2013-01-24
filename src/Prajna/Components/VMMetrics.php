<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VMMetrics
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_all(){
		return $this->doCall('VM_metrics.get_all',array(
			$this->session_id
		));
	}

	public function get_uuid($VMMetrics){
		return $this->doCall('VM_metrics.get_uuid',array(
			$this->session_id,
			$VMMetrics
		));
	}

	public function get_memory_actual($VMMetrics){
		return $this->doCall('VM_metrics.get_memory_actual',array(
			$this->session_id,
			$VMMetrics
		));
	}

	public function get_VCPUs_number($VMMetrics){
		return $this->doCall('VM_metrics.get_VCPUs_number',array(
			$this->session_id,
			$VMMetrics
		));
	}

	public function get_VCPUs_utilisation($VMMetrics){
		return $this->doCall('VM_metrics.get_VCPUs_utilisation',array(
			$this->session_id,
			$VMMetrics
		));
	}

	public function get_VCPUs_CPU($VMMetrics){
		return $this->doCall('VM_metrics.get_VCPUs_CPU',array(
			$this->session_id,
			$VMMetrics
		));
	}

	public function get_VCPUs_params($VMMetrics){
		return $this->doCall('VM_metrics.get_VCPUs_params',array(
			$this->session_id,
			$VMMetrics
		));
	}

	public function get_VCPUs_flags($VMMetrics){
		return $this->doCall('VM_metrics.get_VCPUs_flags',array(
			$this->session_id,
			$VMMetrics
		));
	}

	public function get_state($VMMetrics){
		return $this->doCall('VM_metrics.get_state',array(
			$this->session_id,
			$VMMetrics
		));
	}

	public function get_start_time($VMMetrics){
		return $this->doCall('VM_metrics.get_start_time',array(
			$this->session_id,
			$VMMetrics
		));
	}

	public function get_last_updated($VMMetrics){
		return $this->doCall('VM_metrics.get_last_updated',array(
			$this->session_id,
			$VMMetrics
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('VM_metrics.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($VMMetrics){
		return $this->doCall('VM_metrics.get_record',array(
			$this->session_id,
			$VMMetrics
		));
	}
}
