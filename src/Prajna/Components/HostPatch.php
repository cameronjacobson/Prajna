<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class HostPatch
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function destroy($host_patch){
		return $this->doCall('host_patch.destroy',array(
			$this->session_id,
			$host_patch
		));
	}

	public function apply($host_patch){
		return $this->doCall('host_patch.apply',array(
			$this->session_id,
			$host_patch
		));
	}

	public function get_all(){
		return $this->doCall('host_patch.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('host_patch.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($host_patch){
		return $this->doCall('host_patch.get_uuid',array(
			$this->session_id,
			$host_patch
		));
	}

	public function get_name_label($host_patch){
		return $this->doCall('host_patch.get_name_label',array(
			$this->session_id,
			$host_patch
		));
	}

	public function get_name_description($host_patch){
		return $this->doCall('host_patch.get_name_description',array(
			$this->session_id,
			$host_patch
		));
	}

	public function get_version($host_patch){
		return $this->doCall('host_patch.get_version',array(
			$this->session_id,
			$host_patch
		));
	}

	public function get_host($host_patch){
		return $this->doCall('host_patch.get_host',array(
			$this->session_id,
			$host_patch
		));
	}

	public function get_applied($host_patch){
		return $this->doCall('host_patch.get_applied',array(
			$this->session_id,
			$host_patch
		));
	}

	public function get_timestamp_applied($host_patch){
		return $this->doCall('host_patch.get_timestamp_applied',array(
			$this->session_id,
			$host_patch
		));
	}

	public function get_size($host_patch){
		return $this->doCall('host_patch.get_size',array(
			$this->session_id,
			$host_patch
		));
	}

	public function get_pool_patch($host_patch){
		return $this->doCall('host_patch.get_pool_patch',array(
			$this->session_id,
			$host_patch
		));
	}

	public function get_other_config($host_patch){
		return $this->doCall('host_patch.get_other_config',array(
			$this->session_id,
			$host_patch
		));
	}

	public function set_other_config($host_patch,Array $config){
		return $this->doCall('host_patch.set_other_config',array(
			$this->session_id,
			$host_patch,
			$config
		));
	}

	public function add_to_other_config($host_patch,$key,$value){
		return $this->doCall('host_patch.add_to_other_config',array(
			$this->session_id,
			$host_patch,
			$key,
			$value
		));
	}

	public function remove_from_other_config($host_patch,$key){
		return $this->doCall('host_patch.remove_from_other_config',array(
			$this->session_id,
			$host_patch,
			$key
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('host_patch.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($host_patch){
		return $this->doCall('host_patch.get_record',array(
			$this->session_id,
			$host_patch
		));
	}

	public function get_by_name_label($host_patch,$name_label){
		return $this->doCall('host_patch.get_by_name_label',array(
			$this->session_id,
			$host_patch,
			$name_label
		));
	}
}
