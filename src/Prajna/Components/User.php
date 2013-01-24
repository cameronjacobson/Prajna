<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class User
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_uuid($user){
		return $this->doCall('user.get_uuid',array(
			$this->session_id,
			$user
		));
	}

	public function get_short_name($user){
		return $this->doCall('user.get_short_name',array(
			$this->session_id,
			$user
		));
	}

	public function get_fullname($user){
		return $this->doCall('user.get_fullname',array(
			$this->session_id,
			$user
		));
	}

	public function set_fullname($user,$fullname){
		return $this->doCall('user.set_fullname',array(
			$this->session_id,
			$user,
			$fullname
		));
	}

	public function create(Array $UserRecord){
		return $this->doCall('user.create',array(
			$this->session_id,
			$UserRecord
		));
	}

	public function destroy($user){
		return $this->doCall('user.destroy',array(
			$this->session_id,
			$user
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('user.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($user){
		return $this->doCall('user.get_record',array(
			$this->session_id,
			$user
		));
	}
}
