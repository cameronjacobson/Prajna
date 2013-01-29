<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VMGuestMetrics
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_all(){
		return $this->doCall('VM_guest_metrics.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('VM_guest_metrics.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($VMGuestMetrics){
		return $this->doCall('VM_guest_metrics.get_uuid',array(
			$this->session_id,
			$VMGuestMetrics
		));
	}

	public function get_os_version($VMGuestMetrics){
		return $this->doCall('VM_guest_metrics.get_os_version',array(
			$this->session_id,
			$VMGuestMetrics
		));
	}

	public function get_PV_drivers_version($VMGuestMetrics){
		return $this->doCall('VM_guest_metrics.get_PV_drivers_version',array(
			$this->session_id,
			$VMGuestMetrics
		));
	}

	public function get_PV_drivers_up_to_date($VMGuestMetrics){
		return $this->doCall('VM_guest_metrics.get_PV_drivers_up_to_date',array(
			$this->session_id,
			$VMGuestMetrics
		));
	}

	public function get_memory($VMGuestMetrics){
		return $this->doCall('VM_guest_metrics.get_memory',array(
			$this->session_id,
			$VMGuestMetrics
		));
	}

	public function get_disks($VMGuestMetrics){
		return $this->doCall('VM_guest_metrics.get_disks',array(
			$this->session_id,
			$VMGuestMetrics
		));
	}

	public function get_networks($VMGuestMetrics){
		return $this->doCall('VM_guest_metrics.get_networks',array(
			$this->session_id,
			$VMGuestMetrics
		));
	}

	public function get_other($VMGuestMetrics){
		return $this->doCall('VM_guest_metrics.get_other',array(
			$this->session_id,
			$VMGuestMetrics
		));
	}

	public function get_last_updated($VMGuestMetrics){
		return $this->doCall('VM_guest_metrics.get_last_updated',array(
			$this->session_id,
			$VMGuestMetrics
		));
	}

	public function get_other_config($VMGuestMetrics){
		return $this->doCall('VM_guest_metrics.get_other_config',array(
			$this->session_id,
			$VMGuestMetrics
		));
	}

	public function set_other_config($VMGuestMetrics,Array $config){
		return $this->doCall('VM_guest_metrics.set_other_config',array(
			$this->session_id,
			$VMGuestMetrics,
			$config
		));
	}

	public function add_to_other_config($VMGuestMetrics,$key,$value){
		return $this->doCall('VM_guest_metrics.add_to_other_config',array(
			$this->session_id,
			$VMGuestMetrics,
			$key,
			$value
		));
	}

	public function remove_from_other_config($VMGuestMetrics,$key){
		return $this->doCall('VM_guest_metrics.get_last_updated',array(
			$this->session_id,
			$VMGuestMetrics,
			$key
		));
	}

	public function get_live($VMGuestMetrics){
		return $this->doCall('VM_guest_metrics.get_live',array(
			$this->session_id,
			$VMGuestMetrics
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('VM_guest_metrics.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($VMGuestMetrics){
		return $this->doCall('VM_guest_metrics.get_record',array(
			$this->session_id,
			$VMGuestMetrics
		));
	}
}
