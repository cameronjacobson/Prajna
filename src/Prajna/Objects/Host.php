<?php

namespace Prajna\Objects;

class Host
{
	public $uuid;
	public $name_label;
	public $name_description;
	public $memory_overhead;
	public $allowed_operations;
	public $current_operations;
	public $API_version_major;
	public $API_version_minor;
	public $API_version_vendor;
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
	public $crashdumps;
	public $patches;
	public $PBDs;
	public $host_CPUs;
	public $cpu_info;
	public $hostname;
	public $address;
	public $metrics;
	public $license_params;
	public $boot_free_mem;
	public $ha_statefiles;
	public $ha_network_peers;
	public $blobs;
	public $tags;
	public $external_auth_type;
	public $external_auth_service_name;
	public $external_auth_configuration;
	public $edition;
	public $license_server;
	public $bios_strings;
	public $power_on_mode;
	public $power_on_config;
	public $local_cache_sr;
	public $chipset_info;
	public $PCIs;
	public $PGPUs;


	public function __construct(){}
}
