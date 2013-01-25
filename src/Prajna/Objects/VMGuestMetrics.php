<?php

namespace Prajna\Objects;

class VMGuestMetrics
{
	public $uuid;
	public $os_version;
	public $PV_drivers_version;
	public $memory;
	public $disks;
	public $networks;
	public $other;
	public $last_updated;

	public function __construct(){}
}
