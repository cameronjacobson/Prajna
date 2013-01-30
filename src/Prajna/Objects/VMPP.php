<?php

namespace Prajna\Objects;

class VMPP
{
	public $uuid;
	public $name_label;
	public $name_description;
	public $is_policy_enabled;
	public $backup_type;
	public $backup_retention_value;
	public $backup_frequency;
	public $backup_schedule;
	public $is_backup_running;
	public $backup_last_run_time;
	public $archive_target_type;
	public $archive_target_config;
	public $archive_frequency;
	public $archive_schedule;
	public $is_archive_running;
	public $archive_last_run_time;
	public $VMs;
	public $is_alarm_enabled;
	public $alarm_config;
	public $recent_alerts;

	public function __construct(){}
}
