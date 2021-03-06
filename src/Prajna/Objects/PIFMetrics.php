<?php

namespace Prajna\Objects;

class PIFMetrics
{
	public $uuid;
	public $io_read_kbs;
	public $io_write_kbs;
	public $carrier;
	public $vendor_id;
	public $vendor_name;
	public $device_id;
	public $device_name;
	public $speed;
	public $duplex;
	public $pci_bus_path;
	public $last_updated;
	public $other_config;

	public function __construct(){}
}
