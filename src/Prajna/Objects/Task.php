<?php

namespace Prajna\Objects;

class Task
{
	public $uuid;
	public $name_label;
	public $name_description;
	public $allowed_operations;
	public $current_operations;
	public $created;
	public $finished;
	public $status;
	public $resident_on;
	public $progress;
	public $externalpid;
	public $stunnelpid;
	public $forwarded;
	public $forwarded_to;
	public $type;
	public $result;
	public $error_info;
	public $other_config;
	public $subtask_of;
	public $subtasks;

	public function __construct(){}
}
