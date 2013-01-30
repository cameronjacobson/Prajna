<?php

namespace Prajna\Objects;

class PPCI
{
	public $uuid;
	public $class_id;
	public $class_name;
	public $vendor_id;
	public $vendor_name;
	public $device_id;
	public $device_name;
	public $host;
	public $pci_id;
	public $functions;
	public $attached_VMs;
	public $dependencies;
	public $other_config;

	public function __construct(){}
}
