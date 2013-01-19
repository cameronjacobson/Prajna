<?php

namespace Prajna\Objects;

class PPCI
{
	public $uuid;
	public $host;
	public $domain;
	public $bus;
	public $slot;
	public $func;
	public $name;
	public $vendor_id;
	public $vendor_name;
	public $device_id;
	public $device_name;
	public $revision_id;
	public $class_code;
	public $class_name;
	public $subsystem_vendor_id;
	public $subsystem_vendor_name;
	public $subsystem_id;
	public $subsystem_name;
	public $driver;

	public function __construct(){}
}
