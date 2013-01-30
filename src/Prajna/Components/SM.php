<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class SM
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_all(){
		return $this->doCall('SM.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('SM.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($SM){
		return $this->doCall('SM.get_uuid',array(
			$this->session_id,
			$SM
		));
	}

	public function get_name_label($SM){
		return $this->doCall('SM.get_name_label',array(
			$this->session_id,
			$SM
		));
	}

	public function get_name_description($SM){
		return $this->doCall('SM.get_name_description',array(
			$this->session_id,
			$SM
		));
	}

	public function get_type($SM){
		return $this->doCall('SM.get_type',array(
			$this->session_id,
			$SM
		));
	}

	public function get_vendor($SM){
		return $this->doCall('SM.get_vendor',array(
			$this->session_id,
			$SM
		));
	}

	public function get_copyright($SM){
		return $this->doCall('SM.get_copyright',array(
			$this->session_id,
			$SM
		));
	}

	public function get_version($SM){
		return $this->doCall('SM.get_version',array(
			$this->session_id,
			$SM
		));
	}

	public function get_required_api_version($SM){
		return $this->doCall('SM.get_required_api_version',array(
			$this->session_id,
			$SM
		));
	}

	public function get_configuration($SM){
		return $this->doCall('SM.get_configuration',array(
			$this->session_id,
			$SM
		));
	}

	public function get_capabilities($SM){
		return $this->doCall('SM.get_capabilities',array(
			$this->session_id,
			$SM
		));
	}

	public function get_other_config($SM){
		return $this->doCall('SM.get_other_config',array(
			$this->session_id,
			$SM
		));
	}

	public function set_other_config_($SM,Array $config){
		return $this->doCall('SM.set_other_config',array(
			$this->session_id,
			$SM,
			$config
		));
	}

	public function add_to_other_config($SM,$key,$value){
		return $this->doCall('SM.add_to_other_config',array(
			$this->session_id,
			$SM,
			$key,
			$value
		));
	}

	public function remove_from_other_config($SM,$key){
		return $this->doCall('SM.remove_from_other_config',array(
			$this->session_id,
			$SM,
			$key
		));
	}

	public function get_driver_filename($SM){
		return $this->doCall('SM.get_driver_filename',array(
			$this->session_id,
			$SM
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('SM.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($SM){
		return $this->doCall('SM.get_record',array(
			$this->session_id,
			$SM
		));
	}

	public function get_by_name_label($label){
		return $this->doCall('SM.get_by_name_label',array(
			$this->session_id,
			$label
		));
	}
}
