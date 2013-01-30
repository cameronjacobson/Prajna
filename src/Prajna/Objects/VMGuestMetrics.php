<?php

namespace Prajna\Objects;

class VMGuestMetrics
{
	public $uuid;
	public $os_version;
	public $PV_drivers_version;
	public $PV_drivers_up_to_date;
	public $memory;
	public $disks;
	public $networks;
	public $other;
	public $last_updated;
	public $other_config;
	public $live;

	public function __construct(){}
}
