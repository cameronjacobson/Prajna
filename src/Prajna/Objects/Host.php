<?php

namespace Prajna\Objects;

class Host
{
	public $uuid;
	public $name_label;
	public $name_description;
	public $API_version_major;
	public $API_version_minor;
	public $API_version_vendor_implementation;
	public $enabled;
	public $software_version;
	public $other_config;
	public $capabilities;
	public $cpu_configuration;
	public $sched_policy;
	public $supported_bootloaders;
	public $resident_VMs;
	public $logging;
	public $PIFs;
	public $suspend_image_sr;
	public $crash_dump_sr;
	public $PBDs;
	public $PPCIs;
	public $host_CPUs;
	public $metrics;

	public function __construct(){}
}
