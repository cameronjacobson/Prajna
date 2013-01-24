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
