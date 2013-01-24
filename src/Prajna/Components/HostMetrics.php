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

	public function get_memory_free($HostMetrics){
        return $this->doCall('host_metrics.get_memory_free',array(
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
