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

	public function add_to_roles($subject,$role){
		return $this->doCall('subject.add_to_roles',array(
			$this->session_id,
			$subject,
			$role
		));
	}

	public function remove_from_roles($subject,$role){
		return $this->doCall('subject.remove_from_roles',array(
			$this->session_id,
			$subject,
			$role
		));
	}

	public function get_all(){
		return $this->doCall('subject.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('subject.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($subject){
		return $this->doCall('subject.get_uuid',array(
			$this->session_id,
			$subject
		));
	}

	public function get_subject_identifier($subject){
		return $this->doCall('subject.get_subject_identifier',array(
			$this->session_id,
			$subject
		));
	}

	public function get_other_config($subject){
		return $this->doCall('subject.get_other_config',array(
			$this->session_id,
			$subject
		));
	}

	public function get_roles($subject){
		return $this->doCall('subject.get_roles',array(
			$this->session_id,
			$subject
		));
	}

	public function create($args){
		return $this->doCall('subject.create',array(
			$this->session_id,
			$args
		));
	}

	public function destroy($subject){
		return $this->doCall('subject.destroy',array(
			$this->session_id,
			$subject
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('subject.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($subject){
		return $this->doCall('subject.get_record',array(
			$this->session_id,
			$subject
		));
	}
}
