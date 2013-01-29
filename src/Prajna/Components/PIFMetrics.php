<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class PIFMetrics
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_all(){
		return $this->doCall('PIF_metrics.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('PIF_metrics.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($PIFMetrics){
		return $this->doCall('PIF_metrics.get_uuid',array(
			$this->session_id,
			$PIFMetrics
		));
	}

	public function get_io_read_kbs($PIFMetrics){
		return $this->doCall('PIF_metrics.get_io_read_kbs',array(
			$this->session_id,
			$PIFMetrics
		));
	}

	public function get_io_write_kbs($PIFMetrics){
		return $this->doCall('PIF_metrics.get_io_write_kbs',array(
			$this->session_id,
			$PIFMetrics
		));
	}

	public function get_carrier($PIFMetrics){
		return $this->doCall('PIF_metrics.get_carrier',array(
			$this->session_id,
			$PIFMetrics
		));
	}

	public function get_vendor_id($PIFMetrics){
		return $this->doCall('PIF_metrics.get_vendor_id',array(
			$this->session_id,
			$PIFMetrics
		));
	}

	public function get_vendor_name($PIFMetrics){
		return $this->doCall('PIF_metrics.get_vendor_name',array(
			$this->session_id,
			$PIFMetrics
		));
	}

	public function get_device_id($PIFMetrics){
		return $this->doCall('PIF_metrics.get_device_id',array(
			$this->session_id,
			$PIFMetrics
		));
	}

	public function get_device_name($PIFMetrics){
		return $this->doCall('PIF_metrics.get_device_name',array(
			$this->session_id,
			$PIFMetrics
		));
	}

	public function get_speed($PIFMetrics){
		return $this->doCall('PIF_metrics.get_speed',array(
			$this->session_id,
			$PIFMetrics
		));
	}

	public function get_duplex($PIFMetrics){
		return $this->doCall('PIF_metrics.get_duplex',array(
			$this->session_id,
			$PIFMetrics
		));
	}

	public function get_pci_bus_path($PIFMetrics){
		return $this->doCall('PIF_metrics.get_pci_bus_path',array(
			$this->session_id,
			$PIFMetrics
		));
	}

	public function get_last_updated($PIFMetrics){
		return $this->doCall('PIF_metrics.get_last_updated',array(
			$this->session_id,
			$PIFMetrics
		));
	}

	public function get_other_config($PIFMetrics){
		return $this->doCall('PIF_metrics.get_other_config',array(
			$this->session_id,
			$PIFMetrics
		));
	}

	public function set_other_config($PIFMetrics,Array $config){
		return $this->doCall('PIF_metrics.set_other_config',array(
			$this->session_id,
			$PIFMetrics,
			$config
		));
	}

	public function add_to_other_config($PIFMetrics,$key,$value){
		return $this->doCall('PIF_metrics.add_to_other_config',array(
			$this->session_id,
			$PIFMetrics,
			$key,
			$value
		));
	}

	public function remove_from_other_config($PIFMetrics,$key){
		return $this->doCall('PIF_metrics.get_other_config',array(
			$this->session_id,
			$PIFMetrics,
			$key
		));
	}

	public function get_by_uuid($PIFMetrics){
		return $this->doCall('PIF_metrics.get_by_uuid',array(
			$this->session_id,
			$PIFMetrics
		));
	}

	public function get_record($PIFMetrics){
		return $this->doCall('PIF_metrics.get_record',array(
			$this->session_id,
			$PIFMetrics
		));
	}
}
