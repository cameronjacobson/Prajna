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

	public function get_last_updated($PIFMetrics){
		return $this->doCall('PIF_metrics.get_last_updated',array(
			$this->session_id,
			$PIFMetrics
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
