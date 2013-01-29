<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VIFMetrics
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_all(){
		return $this->doCall('VIF_metrics.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('VIF_metrics.get_records',array(
			$this->session_id
		));
	}

	public function get_uuid($VIFMetrics){
		return $this->doCall('VIF_metrics.get_uuid',array(
			$this->session_id,
			$VIFMetrics
		));
	}

	public function get_io_read_kbs($VIFMetrics){
		return $this->doCall('VIF_metrics.get_io_read_kbs',array(
			$this->session_id,
			$VIFMetrics
		));
	}

	public function get_io_write_kbs($VIFMetrics){
		return $this->doCall('VIF_metrics.get_io_write_kbs',array(
			$this->session_id,
			$VIFMetrics
		));
	}

	public function get_last_updated($VIFMetrics){
		return $this->doCall('VIF_metrics.get_last_updated',array(
			$this->session_id,
			$VIFMetrics
		));
	}

	public function get_other_config($VIFMetrics){
		return $this->doCall('VIF_metrics.get_other_config',array(
			$this->session_id,
			$VIFMetrics
		));
	}
	public function set_other_config($VIFMetrics,Array $config){
		return $this->doCall('VIF_metrics.set_other_config',array(
			$this->session_id,
			$VIFMetrics,
			$config
		));
	}
	public function add_to_other_config($VIFMetrics,$key,$value){
		return $this->doCall('VIF_metrics.add_to_other_config',array(
			$this->session_id,
			$VIFMetrics,
			$key,
			$value
		));
	}
	public function remove_from_other_config($VIFMetrics,$key){
		return $this->doCall('VIF_metrics.remove_from_other_config',array(
			$this->session_id,
			$VIFMetrics,
			$key
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('VIF_metrics.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($VIFMetrics){
		return $this->doCall('VIF_metrics.get_record',array(
			$this->session_id,
			$VIFMetrics
		));
	}
}
