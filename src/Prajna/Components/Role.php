<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Subject
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_permissions($role){
		return $this->doCall('role.get_permissions',array(
			$this->session_id,
			$role
		));
	}

	public function get_permissions_name_label($role){
		return $this->doCall('role.get_permissions_name_label',array(
			$this->session_id,
			$role
		));
	}

	public function get_by_permission($role){
		return $this->doCall('role.get_by_permission',array(
			$this->session_id,
			$role
		));
	}

	public function get_by_permission_name_label($label){
		return $this->doCall('role.get_by_permission_name_label',array(
			$this->session_id,
			$label
		));
	}

	public function get_all(){
		return $this->doCall('role.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('role.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($role){
		return $this->doCall('role.get_uuid',array(
			$this->session_id,
			$role
		));
	}

	public function get_name_label($role){
		return $this->doCall('role.get_name_label',array(
			$this->session_id,
			$role
		));
	}

	public function get_name_description($role){
		return $this->doCall('role.get_name_description',array(
			$this->session_id,
			$role
		));
	}

	public function get_subroles($role){
		return $this->doCall('role.get_subroles',array(
			$this->session_id,
			$role
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('role.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($role){
		return $this->doCall('role.get_record',array(
			$this->session_id,
			$role
		));
	}

	public function get_by_name_label($label){
		return $this->doCall('role.get_by_name_label',array(
			$this->session_id,
			$role,
			$label
		));
	}
}
