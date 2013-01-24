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

	public function get_all(){
        return $this->doCall('host_cpu.get_all',array(
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

	public function get_by_uuid($uuid){
        return $this->doCall('host_cpu.get_by_uuid',array(
            $this->session_id,
			$uuid
        ));
	}

	public function get_record($HostCpu){
        return $this->doCall('host_cpu.get_record',array(
            $this->session_id,
			$HostCpu
        ));
	}
}
