<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class PoolPatch
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function apply($pool_patch,$host){
		return $this->doCall('pool_patch.apply',array(
			$this->session_id,
			$pool_patch,
			$host
		));
	}

	public function pool_apply($pool_patch,$host){
		return $this->doCall('pool_patch.pool_apply',array(
			$this->session_id,
			$pool_patch
		));
	}

	public function precheck($pool_patch,$host){
		return $this->doCall('pool_patch.precheck',array(
			$this->session_id,
			$pool_patch,
			$host
		));
	}

	public function clean($pool_patch){
		return $this->docall('pool_patch.clean',array(
			$this->session_id,
			$pool_patch
		));
	}

	public function pool_clean($pool_patch){
		return $this->docall('pool_patch.pool_clean',array(
			$this->session_id,
			$pool_patch
		));
	}

	public function destroy($pool_patch){
		return $this->docall('pool_patch.destroy',array(
			$this->session_id,
			$pool_patch
		));
	}

	public function clean_on_host($pool_patch,$host){
		return $this->docall('pool_patch.clean_on_host',array(
			$this->session_id,
			$pool_patch,
			$host
		));
	}

	public function get_all(){
		return $this->doCall('pool_patch.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('pool_patch.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($pool_patch){
		return $this->doCall('pool_patch.get_uuid',array(
			$this->session_id,
			$pool_patch
		));
	}

	public function get_name_label($pool_patch){
		return $this->doCall('pool_patch.get_name_label',array(
			$this->session_id,
			$pool_patch
		));
	}

	public function get_name_description($pool_patch){
		return $this->doCall('pool_patch.get_name_description',array(
			$this->session_id,
			$pool_patch
		));
	}

	public function get_version($pool_patch){
		return $this->doCall('pool_patch.get_version',array(
			$this->session_id,
			$pool_patch
		));
	}

	public function get_size($pool_patch){
		return $this->doCall('pool_patch.get_size',array(
			$this->session_id,
			$pool_patch
		));
	}

	public function get_pool_applied($pool_patch){
		return $this->doCall('pool_patch.get_pool_applied',array(
			$this->session_id,
			$pool_patch
		));
	}

	public function get_host_patches($pool_patch){
		return $this->doCall('pool_patch.get_host_patches',array(
			$this->session_id,
			$pool_patch
		));
	}

	public function get_after_apply_guidance($pool_patch){
		return $this->doCall('pool_patch.get_after_apply_guidance',array(
			$this->session_id,
			$pool_patch
		));
	}

	public function get_other_config($pool_patch){
		return $this->doCall('pool_patch.get_other_config',array(
			$this->session_id,
			$pool_patch
		));
	}

	public function set_other_config($pool_patch,Array $config){
		return $this->doCall('pool_patch.set_other_config',array(
			$this->session_id,
			$pool_patch,
			$config
		));
	}

	public function add_to_other_config($pool_patch,$key,$value){
		return $this->doCall('pool_patch.add_to_other_config',array(
			$this->session_id,
			$pool_patch,
			$key,
			$value
		));
	}

	public function remove_from_other_config($pool_patch,$key){
		return $this->doCall('pool_patch.remove_from_other_config',array(
			$this->session_id,
			$pool_patch,
			$key
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('pool_patch.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($pool_patch){
		return $this->doCall('pool_patch.get_record',array(
			$this->session_id,
			$pool_patch
		));
	}

	public function get_by_name_label($name_label){
		return $this->doCall('pool_patch.get_by_name_label',array(
			$this->session_id,
			$name_label
		));
	}
}
