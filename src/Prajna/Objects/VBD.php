<?php

namespace Prajna\Objects;

class VBD
{
	public $uuid;
	public $VM;
	public $VDI;
	public $device;
	public $bootable;
	public $mode;
	public $type;
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
