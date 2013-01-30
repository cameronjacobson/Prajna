<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class PBD
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function plug($PBD){
		return $this->doCall('PBD.plug',array(
			$this->session_id,
			$PBD
		));
	}

	public function unplug($PBD){
		return $this->doCall('PBD.unplug',array(
			$this->session_id,
			$PBD
		));
	}

	public function set_device_config($PBD,Array $device_config){
		return $this->doCall('PBD.set_device_config',array(
			$this->session_id,
			$PBD,
			$device_config
		));
	}

	public function get_all(){
		return $this->doCall('PBD.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('PBD.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($PBD){
		return $this->doCall('PBD.get_uuid',array(
			$this->session_id,
			$PBD
		));
	}

	public function get_host($PBD){
		return $this->doCall('PBD.get_host',array(
			$this->session_id,
			$PBD
		));
	}

	public function get_SR($PBD){
		return $this->doCall('PBD.get_SR',array(
			$this->session_id,
			$PBD
		));
	}

	public function get_device_config($PBD){
		return $this->doCall('PBD.get_device_config',array(
			$this->session_id,
			$PBD
		));
	}

	public function get_currently_attached($PBD){
		return $this->doCall('PBD.get_currently_attached',array(
			$this->session_id,
			$PBD
		));
	}

	public function get_other_config($PBD){
		return $this->doCall('PBD.get_other_config',array(
			$this->session_id,
			$PBD
		));
	}

	public function set_other_config($PBD,Array $config){
		return $this->doCall('PBD.set_other_config',array(
			$this->session_id,
			$PBD,
			$config
		));
	}

	public function add_to_other_config($PBD,$key,$value){
		return $this->doCall('PBD.add_to_other_config',array(
			$this->session_id,
			$PBD,
			$key,
			$value
		));
	}

	public function remove_from_other_config($PBD,$key){
		return $this->doCall('PBD.remove_from_other_config',array(
			$this->session_id,
			$PBD,
			$key
		));
	}

	public function create(Array $PBDRecord){
		return $this->doCall('PBD.create',array(
			$this->session_id,
			$PBDRecord
		));
	}

	public function destroy($PBD){
		return $this->doCall('PBD.destroy',array(
			$this->session_id,
			$PBD
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('PBD.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($PBD){
		return $this->doCall('PBD.get_record',array(
			$this->session_id,
			$PBD
		));
	}
}
