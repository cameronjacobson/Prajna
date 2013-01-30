<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VMPP
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function protect_now($VMPP){
		return $this->doCall('VMPP.protect_now',array(
			$this->session_id,
			$VMPP
		));
	}

	public function archive_now($VMPP){
		return $this->doCall('VMPP.archive_now',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_alerts($VMPP,$hours_from_now){
		return $this->doCall('VMPP.get_alerts',array(
			$this->session_id,
			$VMPP,
			$hours_from_now
		));
	}

	public function set_backup_retention_value($VMPP,$backup_frequency){
		return $this->doCall('VMPP.set_backup_retention_value',array(
			$this->session_id,
			$VMPP,
			$backup_frequency
		));
	}

	public function set_backup_frequency($VMPP,$backup_frequency){
		return $this->doCall('VMPP.set_backup_frequency',array(
			$this->session_id,
			$VMPP,
			$backup_frequency
		));
	}

	public function set_backup_schedule($VMPP,Array $backup_schedue){
		return $this->doCall('VMPP.set_backup_schedule',array(
			$this->session_id,
			$VMPP,
			$backup_schedule
		));
	}

	public function set_archive_frequency($VMPP,$archive_frequency){
		return $this->doCall('VMPP.set_archive_frequency',array(
			$this->session_id,
			$VMPP,
			$archive_frequency
		));
	}

	public function set_archive_schedule($VMPP,Array $archive_schedule){
		return $this->doCall('VMPP.set_archive_schedule',array(
			$this->session_id,
			$VMPP,
			$archive_schedule
		));
	}

	public function set_archive_target_type($VMPP,$archive_target_config_type){
		return $this->doCall('VMPP.set_archive_target_type',array(
			$this->session_id,
			$VMPP,
			$archive_target_config_type
		));
	}

	public function set_archive_target_config($VMPP,Array $config){
		return $this->doCall('VMPP.set_archive_target_config',array(
			$this->session_id,
			$VMPP,
			$config
		));
	}

	public function set_is_alarm_enabled($VMPP,$is_alarm_enabled){
		return $this->doCall('VMPP.set_is_alarm_enabled',array(
			$this->session_id,
			$VMPP,
			$is_alarm_enabled
		));
	}

	public function set_alarm_config($VMPP,Array $config){
		return $this->doCall('VMPP.set_alarm_config',array(
			$this->session_id,
			$VMPP,
			$config
		));
	}

	public function add_to_backup_schedule($VMPP,$key,$value){
		return $this->doCall('VMPP.add_to_backup_schedule',array(
			$this->session_id,
			$VMPP,
			$key,
			$value
		));
	}

	public function add_to_archive_target_config($VMPP,$key,$value){
		return $this->doCall('VMPP.add_to_archive_target_config',array(
			$this->session_id,
			$VMPP,
			$key,
			$value
		));
	}

	public function add_to_archive_schedule($VMPP,$key,$value){
		return $this->doCall('VMPP.add_to_archive_schedule',array(
			$this->session_id,
			$VMPP,
			$key,
			$value
		));
	}

	public function add_to_alarm_config($VMPP,$key,$value){
		return $this->doCall('VMPP.add_to_alarm_config',array(
			$this->session_id,
			$VMPP,
			$key,
			$value
		));
	}

	public function remove_from_backup_schedule($VMPP,$key){
		return $this->doCall('VMPP.remove_from_backup_schedule',array(
			$this->session_id,
			$VMPP,
			$key
		));
	}

	public function remove_from_archive_target_config($VMPP,$key){
		return $this->doCall('VMPP.remove_from_archive_target_config',array(
			$this->session_id,
			$VMPP,
			$key
		));
	}

	public function remove_from_archive_schedule($VMPP,$key){
		return $this->doCall('VMPP.remove_from_archive_schedule',array(
			$this->session_id,
			$VMPP,
			$key
		));
	}

	public function remove_from_alarm_config($VMPP,$key){
		return $this->doCall('VMPP.remove_from_alarm_config',array(
			$this->session_id,
			$VMPP,
			$key
		));
	}

	public function set_backup_last_run_time($VMPP,$datetime){
		return $this->doCall('VMPP.set_backup_last_run_time',array(
			$this->session_id,
			$VMPP,
			$datetime
		));
	}

	public function set_archive_last_run_time($VMPP,$datetime){
		return $this->doCall('VMPP.set_archive_last_run_time',array(
			$this->session_id,
			$VMPP,
			$datetime
		));
	}

	public function get_all(){
		return $this->doCall('VMPP.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('VMPP.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($VMPP){
		return $this->doCall('VMPP.get_uuid',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_name_label($VMPP){
		return $this->doCall('VMPP.get_name_label',array(
			$this->session_id,
			$VMPP
		));
	}

	public function set_name_label($VMPP,$name_label){
		return $this->doCall('VMPP.set_name_label',array(
			$this->session_id,
			$VMPP,
			$name_label
		));
	}

	public function get_name_description($VMPP){
		return $this->doCall('VMPP.get_name_description',array(
			$this->session_id,
			$VMPP
		));
	}

	public function set_name_description($VMPP,$name_description){
		return $this->doCall('VMPP.set_name_description',array(
			$this->session_id,
			$VMPP,
			$name_description
		));
	}

	public function get_is_policy_enabled($VMPP){
		return $this->doCall('VMPP.get_is_policy_enabled',array(
			$this->session_id,
			$VMPP
		));
	}

	public function set_is_policy_enabled($VMPP,$is_policy_enabled){
		return $this->doCall('VMPP.set_is_policy_enabled',array(
			$this->session_id,
			$VMPP,
			$is_policy_enabled
		));
	}

	public function get_backup_type($VMPP){
		return $this->doCall('VMPP.get_backup_type',array(
			$this->session_id,
			$VMPP
		));
	}

	public function set_backup_type($VMPP,$backup_type){
		return $this->doCall('VMPP.set_backup_type',array(
			$this->session_id,
			$VMPP,
			$backup_type
		));
	}

	public function get_backup_retention_value($VMPP){
		return $this->doCall('VMPP.get_backup_retention_value',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_backup_frequency($VMPP){
		return $this->doCall('VMPP.get_backup_frequency',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_backup_schedule($VMPP){
		return $this->doCall('VMPP.get_backup_schedule',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_is_backup_running($VMPP){
		return $this->doCall('VMPP.get_is_backup_running',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_backup_last_run_time($VMPP){
		return $this->doCall('VMPP.get_backup_last_run_time',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_archive_target_type($VMPP){
		return $this->doCall('VMPP.get_archive_target_type',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_archive_target_config($VMPP){
		return $this->doCall('VMPP.get_archive_target_config',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_archive_frequency($VMPP){
		return $this->doCall('VMPP.get_archive_frequency',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_archive_schedule($VMPP){
		return $this->doCall('VMPP.get_archive_schedule',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_is_archive_running($VMPP){
		return $this->doCall('VMPP.get_is_archive_running',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_archive_last_run_time($VMPP){
		return $this->doCall('VMPP.get_archive_last_run_time',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_VMs($VMPP){
		return $this->doCall('VMPP.get_VMs',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_is_alarm_enabled($VMPP){
		return $this->doCall('VMPP.get_is_alarm_enabled',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_alarm_config($VMPP){
		return $this->doCall('VMPP.get_alarm_config',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_recent_alerts($VMPP){
		return $this->doCall('VMPP.get_recent_alerts',array(
			$this->session_id,
			$VMPP
		));
	}

	public function create(Array $VMPPRecord){
		return $this->doCall('VMPP.create',array(
			$this->session_id,
			$VMPPRecord
		));
	}

	public function destroy($VMPP){
		return $this->doCall('VMPP.destroy',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('VMPP.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($VMPP){
		return $this->doCall('VMPP.get_record',array(
			$this->session_id,
			$VMPP
		));
	}

	public function get_by_name_label($name_label){
		return $this->doCall('VMPP.get_by_name_label',array(
			$this->session_id,
			$name_label
		));
	}
}
