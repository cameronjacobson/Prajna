<?php

namespace Prajna\Objects;

class VM
{
	public $uuid;
	public $power_state;
	public $name_label;
	public $name_description;
	public $user_version;
	public $is_a_template;
	public $auto_power_on;
	public $suspend_VDI;
	public $resident_on;
	public $memory_static_max;
	public $memory_dynamic_max;
	public $memory_dynamic_min;
	public $memory_static_min;
	public $VCPUs_params;
	public $VCPUs_max;
	public $VCPUs_at_startup;
	public $actions_after_shutdown;
	public $actions_after_reboot;
	public $actions_after_crash;
	public $consoles;
	public $VIFs;
	public $VBDs;
	public $crash_dumps;
	public $VTPMs;
	public $DPCIs;
	public $PV_bootloader;
	public $PV_kernel;
	public $PV_ramdisk;
	public $PV_args;
	public $PV_bootloader_args;
	public $HVM_boot_policy;
	public $HVM_boot_params;
	public $platform;
	public $PCI_bus;
	public $other_config;
	public $domid;
	public $is_control_domain;
	public $metrics;
	public $guest_metrics;
	public $security_label;

	public function __construct(){}
}
