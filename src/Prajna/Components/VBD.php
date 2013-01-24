<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VBD
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function media_change($VBD,$VDI){
		return $this->doCall('VBD.media_change',array(
			$this->session_id,
			$VBD,
			$VDI
		));
	}

	public function plug($VBD){
		return $this->doCall('VBD.plug',array(
			$this->session_id,
			$VBD
		));
	}

	public function unplug($VBD){
		return $this->doCall('VBD.unplug',array(
			$this->session_id,
			$VBD
		));
	}

	public function get_all(){
		return $this->doCall('VBD.get_all',array(
			$this->session_id
		));
	}

	public function get_uuid($VBD){
		return $this->doCall('VBD.get_uuid',array(
			$this->session_id,
			$VBD
		));
	}

	public function get_VM($VBD){
		return $this->doCall('VBD.get_VM',array(
			$this->session_id,
			$VBD
		));
	}

	public function get_VDI($VBD){
		return $this->doCall('VBD.get_VDI',array(
			$this->session_id,
			$VBD
		));
	}

	public function get_device($VBD){
		return $this->doCall('VBD.get_device',array(
			$this->session_id,
			$VBD
		));
	}

	public function set_device($VBD,$device){
		return $this->doCall('VBD.set_device',array(
			$this->session_id,
			$VBD,
			$device
		));
	}

	public function get_bootable($VBD){
		return $this->doCall('VBD.get_bootable',array(
			$this->session_id,
			$VBD
		));
	}

	public function set_bootable($VBD,$bootable){
		return $this->doCall('VBD.unplug',array(
			$this->session_id,
			$VBD,
			$bootable
		));
	}

	public function get_mode($VBD){
		return $this->doCall('VBD.get_mode',array(
			$this->session_id,
			$VBD
		));
	}

	public function set_mode($VBD,$mode){
		return $this->doCall('VBD.set_mode',array(
			$this->session_id,
			$VBD,
			$mode
		));
	}

	public function get_type($VBD){
		return $this->doCall('VBD.get_type',array(
			$this->session_id,
			$VBD
		));
	}

	public function set_type($VBD,$type){
		return $this->doCall('VBD.set_type',array(
			$this->session_id,
			$VBD,
			$type
		));
	}

	public function get_currently_attached($VBD){
		return $this->doCall('VBD.get_currently_attached',array(
			$this->session_id,
			$VBD
		));
	}

	public function get_status_code($VBD){
		return $this->doCall('VBD.get_status_code',array(
			$this->session_id,
			$VBD
		));
	}

	public function get_status_detail($VBD){
		return $this->doCall('VBD.get_status_detail',array(
			$this->session_id,
			$VBD
		));
	}

	public function get_runtime_properties($VBD){
		return $this->doCall('VBD.get_runtime_properties',array(
			$this->session_id,
			$VBD
		));
	}

	public function get_qos_algorithm_type($VBD){
		return $this->doCall('VBD.get_qos_algorithm_type',array(
			$this->session_id,
			$VBD
		));
	}

	public function set_qos_algorithm_type($VBD,$algotype){
		return $this->doCall('VBD.set_qos_algorithm_type',array(
			$this->session_id,
			$VBD,
			$algotype
		));
	}

	public function get_qos_algorithm_params($VBD){
		return $this->doCall('VBD.get_qos_algorithm_params',array(
			$this->session_id,
			$VBD
		));
	}

	public function set_qos_algorithm_params($VBD,Array $algoParams){
		return $this->doCall('VBD.set_qos_algorithm_params',array(
			$this->session_id,
			$VBD,
			$algoParams
		));
	}

	public function add_to_qos_algorithm_params($VBD,$key,$value){
		return $this->doCall('VBD.add_to_qos_algorithm_params',array(
			$this->session_id,
			$VBD,
			$key,
			$value
		));
	}

	public function remove_from_qos_algorithm_params($VBD,$key){
		return $this->doCall('VBD.remove_from_qos_algorithm_params',array(
			$this->session_id,
			$VBD,
			$key
		));
	}

	public function get_qos_supported_algorithms($VBD){
		return $this->doCall('VBD.get_qos_supported_algorithms',array(
			$this->session_id,
			$VBD
		));
	}

	public function get_metrics($VBD){
		return $this->doCall('VBD.get_metrics',array(
			$this->session_id,
			$VBD
		));
	}

	public function create(Array $VBDRecord){
		return $this->doCall('VBD.create',array(
			$this->session_id,
			$VBDRecord
		));
	}

	public function destroy($VBD){
		return $this->doCall('VBD.destroy',array(
			$this->session_id,
			$VBD
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('VBD.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($VBD){
		return $this->doCall('VBD.get_record',array(
			$this->session_id,
			$VBD
		));
	}
}
