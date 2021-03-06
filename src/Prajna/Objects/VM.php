<?php

namespace Prajna\Objects;

class VM
{
	public $uuid;
	public $allowed_operations;
	public $current_operations;
	public $power_state;
	public $name_label;
	public $name_description;
	public $user_version;
	public $is_a_template;
	public $suspend_VDI;
	public $resident_on;
	public $scheduled_to_be_resident_on;
	public $affinity;
	public $memory_overhead;
	public $memory_target;
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
	public $PV_bootloader;
	public $PV_kernel;
	public $PV_ramdisk;
	public $PV_args;
	public $PV_bootloader_args;
	public $HVM_boot_policy;
	public $HVM_boot_params;
	public $HVM_shadow_multiplier;
	public $platform;
	public $PCI_bus;
	public $other_config;
	public $domid;
	public $domarch;
	public $last_boot_CPU_flags;
	public $is_control_domain;
	public $metrics;
	public $guest_metrics;
	public $last_booted_record;
	public $recommendations;
	public $xenstore_data;
	public $ha_always_run;
	public $ha_restart_priority;
	public $is_a_snapshot;
	public $snapshot_of;
	public $snapshots;
	public $snapshot_time;
	public $transportable_snapshot_id;
	public $blobs;
	public $tags;
	public $blocked_operations;
	public $snapshot_info;
	public $snapshot_metadata;
	public $parent;
	public $children;
	public $bios_strings;
	public $protection_policy;
	public $is_snapshot_from_vmpp;
	public $appliance;
	public $start_delay;
	public $shutdown_delay;
	public $order;
	public $VGPUs;
	public $attached_PCIs;
	public $suspend_SR;
	public $version;

	public function __construct(){}
}
