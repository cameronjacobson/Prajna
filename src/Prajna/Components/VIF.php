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

	public function unplug_force($VIF){
		return $this->doCall('VIF.unplug_force',array(
			$this->session_id,
			$VIF
		));
	}

	public function set_locking_mode($VIF,$locking_mode){
		return $this->doCall('VIF.set_locking_mode',array(
			$this->session_id,
			$VIF,
			$locking_mode
		));
	}

	public function set_ipv4_allowed($VIF,Array $ips){
		return $this->doCall('VIF.set_ipv4_allowed',array(
			$this->session_id,
			$VIF,
			$ips
		));
	}

	public function add_ipv4_allowed($VIF,$ips){
		return $this->doCall('VIF.add_ipv4_allowed',array(
			$this->session_id,
			$VIF,
			$ips
		));
	}

	public function remove_ipv4_allowed($VIF,$ips){
		return $this->doCall('VIF.remove_ipv4_allowed',array(
			$this->session_id,
			$VIF,
			$ips
		));
	}
	public function set_ipv6_allowed($VIF,Array $ips){
		return $this->doCall('VIF.set_ipv6_allowed',array(
			$this->session_id,
			$VIF,
			$ips
		));
	}
	public function add_ipv6_allowed($VIF,$ips){
		return $this->doCall('VIF.add_ipv6_allowed',array(
			$this->session_id,
			$VIF,
			$ips
		));
	}
	public function remove_ipv6_allowed($VIF,$ips){
		return $this->doCall('VIF.remove_ipv6_allowed',array(
			$this->session_id,
			$VIF,
			$ips
		));
	}

	public function get_all(){
		return $this->doCall('VIF.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('VIF.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($VIF){
		return $this->doCall('VIF.get_uuid',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_allowed_operations($VIF){
		return $this->doCall('VIF.get_allowed_operations',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_current_operations($VIF){
		return $this->doCall('VIF.get_current_operations',array(
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

	public function get_MTU($VIF){
		return $this->doCall('VIF.get_MTU',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_other_config($VIF){
		return $this->doCall('VIF.get_other_config',array(
			$this->session_id,
			$VIF
		));
	}

	public function set_other_config($VIF,Array $config){
		return $this->doCall('VIF.set_other_config',array(
			$this->session_id,
			$VIF,
			$config
		));
	}

	public function add_to_other_config($VIF,$key,$value){
		return $this->doCall('VIF.add_to_other_config',array(
			$this->session_id,
			$VIF,
			$key,
			$value
		));
	}

	public function remove_from_other_config($VIF,$key){
		return $this->doCall('VIF.remove_from_other_config',array(
			$this->session_id,
			$VIF,
			$key
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

	public function get_MAC_autogenerated($VIF){
		return $this->doCall('VIF.get_MAC_autogenerated',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_locking_mode($VIF){
		return $this->doCall('VIF.get_locking_mode',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_ipv4_allowed($VIF){
		return $this->doCall('VIF.get_ipv4_allowed',array(
			$this->session_id,
			$VIF
		));
	}

	public function get_ipv6_allowed($VIF){
		return $this->doCall('VIF.get_ipv6_allowed',array(
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
