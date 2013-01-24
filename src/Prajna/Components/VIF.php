<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VIF
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function plug($VIF){
		return $this->doCall('VIF.plug',array(
			$this->session_id,
			$VIF
		));
	}

	public function unplug($VIF){
		return $this->doCall('VIF.unplug',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_all(){
		return $this->doCall('VIF.get_all',array(
			$this->session_id
		));
	}

	public function get_uuid($VIF){
		return $this->doCall('VIF.get_uuid',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_device($VIF){
		return $this->doCall('VIF.get_device',array(
			$this->session_id,
			$VIF
		));
	}

	public function set_device($VIF,$device){
		return $this->doCall('VIF.set_device',array(
			$this->session_id,
			$VIF,
			$device
		));
	}

	public function get_network($VIF){
		return $this->doCall('VIF.get_network',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_VM($VIF){
		return $this->doCall('VIF.get_VM',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_MAC($VIF){
		return $this->doCall('VIF.get_MAC',array(
			$this->session_id,
			$VIF
		));
	}

	public function set_MAC($VIF,$MAC){
		return $this->doCall('VIF.set_MAC',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_MTU($VIF){
		return $this->doCall('VIF.get_MTU',array(
			$this->session_id,
			$VIF
		));
	}

	public function set_MTU($VIF,$MTU){
		return $this->doCall('VIF.set_MTU',array(
			$this->session_id,
			$VIF,
			$MTU
		));
	}

	public function get_currently_attached($VIF){
		return $this->doCall('VIF.get_currently_attached',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_status_code($VIF){
		return $this->doCall('VIF.get_status_code',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_status_detail($VIF){
		return $this->doCall('VIF.get_status_detail',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_runtime_properties($VIF){
		return $this->doCall('VIF.get_runtime_properties',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_qos_algorithm_type($VIF){
		return $this->doCall('VIF.get_qos_algorithm_type',array(
			$this->session_id,
			$VIF
		));
	}

	public function set_qos_algorithm_type($VIF,$algoType){
		return $this->doCall('VIF.set_qos_algorithm_type',array(
			$this->session_id,
			$VIF,
			$algoType
		));
	}

	public function get_qos_algorithm_params($VIF){
		return $this->doCall('VIF.get_qos_algorithm_params',array(
			$this->session_id,
			$VIF
		));
	}

	public function set_qos_algorithm_params($VIF,Array $algoParams){
		return $this->doCall('VIF.plug',array(
			$this->session_id,
			$VIF,
			$algoParams
		));
	}

	public function add_to_qos_algorithm_params($VIF,$key,$value){
		return $this->doCall('VIF.add_to_qos_algorithm_params',array(
			$this->session_id,
			$VIF,
			$key,
			$value
		));
	}

	public function remove_from_qos_algorithm_params($VIF,$key){
		return $this->doCall('VIF.remove_from_qos_algorithm_params',array(
			$this->session_id,
			$VIF,
			$key
		));
	}

	public function get_qos_supported_algorithms($VIF){
		return $this->doCall('VIF.get_qos_supported_algorithms',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_metrics($VIF){
		return $this->doCall('VIF.get_metrics',array(
			$this->session_id,
			$VIF
		));
	}

	public function set_security_label($VIF,$label,$oldlabel){
		return $this->doCall('VIF.set_security_label',array(
			$this->session_id,
			$VIF,
			$label,
			$oldlabel
		));
	}

	public function get_security_label($VIF){
		return $this->doCall('VIF.get_security_label',array(
			$this->session_id,
			$VIF
		));
	}

	public function create(Array $VIFRecord){
		return $this->doCall('VIF.create',array(
			$this->session_id,
			$VIFRecord
		));
	}

	public function destroy($VIF){
		return $this->doCall('VIF.destroy',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('VIF.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($VIF){
		return $this->doCall('VIF.get_record',array(
			$this->session_id,
			$VIF
		));
	}
}
