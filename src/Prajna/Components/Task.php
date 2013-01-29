<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Task
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function create($label,$description){
		return $this->doCall('task.create',array(
			$this->session_id,
			$label,
			$description
		));
	}

	public function destroy($task){
		return $this->doCall('task.destroy',array(
			$this->session_id,
			$task
		));
	}

	public function cancel($task){
		return $this->doCall('task.cancel',array(
			$this->session_id,
			$task
		));
	}

	public function get_all(){
		return $this->doCall('task.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('task.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($task){
		return $this->doCall('task.get_uuid',array(
			$this->session_id,
			$task
		));
	}

	public function get_name_label($task){
		return $this->doCall('task.get_name_label',array(
			$this->session_id,
			$task
		));
	}

	public function get_name_description($task){
		return $this->doCall('task.get_name_description',array(
			$this->session_id,
			$task
		));
	}

	public function get_allowed_operations($task){
		return $this->doCall('task.get_allowed_operations',array(
			$this->session_id,
			$task
		));
	}

	public function get_current_operations($task){
		return $this->doCall('task.get_current_operations',array(
			$this->session_id,
			$task
		));
	}

	public function get_created($task){
		return $this->doCall('task.get_created',array(
			$this->session_id,
			$task
		));
	}

	public function get_finished($task){
		return $this->doCall('task.get_finished',array(
			$this->session_id,
			$task
		));
	}

	public function get_status($task){
		return $this->doCall('task.get_status',array(
			$this->session_id,
			$task
		));
	}

	public function get_resident_on($task){
		return $this->doCall('task.get_resident_on',array(
			$this->session_id,
			$task
		));
	}

	public function get_progress($task){
		return $this->doCall('task.get_progress',array(
			$this->session_id,
			$task
		));
	}

	public function get_type($task){
		return $this->doCall('task.get_type',array(
			$this->session_id,
			$task
		));
	}

	public function get_result($task){
		return $this->doCall('task.get_result',array(
			$this->session_id,
			$task
		));
	}

	public function get_error_info($task){
		return $this->doCall('task.get_error_info',array(
			$this->session_id,
			$task
		));
	}

	public function get_other_config($task){
		return $this->doCall('task.get_other_config',array(
			$this->session_id,
			$task
		));
	}

	public function set_other_config($task,Array $config){
		return $this->doCall('task.set_other_config',array(
			$this->session_id,
			$task,
			$config
		));
	}

	public function add_to_other_config($task,$key,$value){
		return $this->doCall('task.add_to_other_config',array(
			$this->session_id,
			$task,
			$key,
			$value
		));
	}

	public function remove_from_other_config($task,$key){
		return $this->doCall('task.remove_from_other_config',array(
			$this->session_id,
			$task,
			$key
		));
	}

	public function get_subtask_of($task){
		return $this->doCall('task.get_subtask_of',array(
			$this->session_id,
			$task
		));
	}

	public function get_subtasks($task){
		return $this->doCall('task.get_subtasks',array(
			$this->session_id,
			$task
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('task.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($task){
		return $this->doCall('task.get_record',array(
			$this->session_id,
			$task
		));
	}

	public function get_by_name_label($label){
		return $this->doCall('task.get_by_name_label',array(
			$this->session_id,
			$label
		));
	}
}
