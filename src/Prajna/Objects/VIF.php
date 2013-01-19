<?php

namespace Prajna\Objects;

class VIF
{
	public $uuid;
	public $device;
	public $network;
	public $VM;
	public $MAC;
	public $MTU;
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
