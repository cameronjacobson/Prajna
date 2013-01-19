<?php

namespace Prajna\Objects;

class VMMetrics
{
	public $uuid;
	public $memory_actual;
	public $VCPUs_number;
	public $VCPUs_utilisation;
	public $VCPUs_CPU;
	public $VCPUs_params;
	public $VCPUs_flags;
	public $state;
	public $start_time;
	public $last_updated;

	public function __construct(){}
}
