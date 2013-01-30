<?php

namespace Prajna\Objects;

class VDI
{
	public $uuid;
	public $name_label;
	public $name_description;
	public $allowed_operations;
	public $current_operations;
	public $SR;
	public $VBDs;
	public $crash_dumps;
	public $virtual_size;
	public $physical_utilisation;
	public $type;
	public $sharable;
	public $read_only;
	public $other_config;
	public $storage_lock;
	public $location;
	public $managed;
	public $missing;
	public $parent;
	public $xenstore_data;
	public $sm_config;
	public $is_a_snapshot;
	public $snapshot_of;
	public $snapshots;
	public $snapshot_time;
	public $tags;
	public $allow_caching;
	public $on_boot;
	public $metadata_of_pool;
	public $metadata_latest;

	public function __construct(){}
}
