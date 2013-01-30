<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class DRTask
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function create(Array $device_config,$whitelist){
		return $this->doCall('DR_task.create',array(
			$this->session_id,
			$device_config,
			$whitelist
		));
	}

	public function destroy($DR_task){
		return $this->doCall('DR_task.destroy',array(
			$this->session_id,
			$DR_task
		));
	}

	public function get_all(){
		return $this->doCall('DR_task.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('DR_task.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($DR_task){
		return $this->doCall('DR_task.get_uuid',array(
			$this->session_id,
			$DR_task
		));
	}

	public function get_introduced_SRs($DR_task){
		return $this->doCall('DR_task.get_introduced_SRs',array(
			$this->session_id,
			$DR_task
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('DR_task.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($DR_task){
		return $this->doCall('DR_task.get_record',array(
			$this->session_id,
			$DR_task
		));
	}
}
