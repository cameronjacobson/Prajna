<?php

namespace Prajna\Objects;

class Task
{
	public $uuid;
	public $name_label;
	public $name_description;
	public $status;
	public $session;
	public $progress;
	public $type;
	public $result;
	public $error_info;
	public $allowed_operations;

	public function __construct(){}
}
