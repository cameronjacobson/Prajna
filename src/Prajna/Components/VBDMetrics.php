<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VBDMetrics
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_all(){
		return $this->doCall('VBD_metrics.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('VBD_metrics.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($VBDMetrics){
		return $this->doCall('VBD_metrics.get_uuid',array(
			$this->session_id,
			$VBDMetrics
		));
	}

	public function get_io_read_kbs($VBDMetrics){
		return $this->doCall('VBD_metrics.get_io_read_kbs',array(
			$this->session_id,
			$VBDMetrics
		));
	}

	public function get_io_write_kbs($VBDMetrics){
		return $this->doCall('VBD_metrics.get_io_write_kbs',array(
			$this->session_id,
			$VBDMetrics
		));
	}

	public function get_last_updated($VBDMetrics){
		return $this->doCall('VBD_metrics.get_last_updated',array(
			$this->session_id,
			$VBDMetrics
		));
	}

	public function get_other_config($VBDMetrics){
		return $this->doCall('VBD_metrics.get_other_config',array(
			$this->session_id,
			$VBDMetrics
		));
	}

	public function set_other_config($VBDMetrics,Array $config){
		return $this->doCall('VBD_metrics.set_other_config',array(
			$this->session_id,
			$VBDMetrics,
			$config
		));
	}

	public function add_to_other_config($VBDMetrics,$key,$value){
		return $this->doCall('VBD_metrics.add_to_other_config',array(
			$this->session_id,
			$VBDMetrics,
			$key,
			$value
		));
	}

	public function remove_from_other_config($VBDMetrics,$key){
		return $this->doCall('VBD_metrics.get_other_config',array(
			$this->session_id,
			$VBDMetrics,
			$key
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('VBD_metrics.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($VBDMetrics){
		return $this->doCall('VBD_metrics.get_record',array(
			$this->session_id,
			$VBDMetrics
		));
	}
}
