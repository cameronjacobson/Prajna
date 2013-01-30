<?php

namespace Prajna\Objects;

class VBD
{
	public $uuid;
	public $allowed_operations;
	public $current_operations;
	public $VM;
	public $VDI;
	public $device;
	public $userdevice;
	public $bootable;
	public $mode;
	public $type;
	public $unpluggable;
	public $storage_lock;
	public $empty;
	public $reserved;
	public $other_config;
	public $currently_attached;
	public $status_code;
	public $status_detail;
	public $runtime_properties;
	public $qos_algorithm_type;
	public $qos_algorithm_params;
	public $qos_algorithm_algorithms;
	public $metrics;

	public function __construct(){}
}
