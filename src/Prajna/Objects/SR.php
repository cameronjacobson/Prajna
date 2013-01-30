<?php

namespace Prajna\Objects;

class SR
{
	public $uuid;
	public $name_label;
	public $name_description;
	public $allowed_operations;
	public $current_operations;
	public $VDIs;
	public $PBDs;
	public $virtual_allocation;
	public $physical_utilisation;
	public $physical_size;
	public $type;
	public $content_type;
	public $shared;
	public $other_config;
	public $tags;
	public $default_vdi_visibility;
	public $sm_config;
	public $blobs;
	public $local_cache_enabled;
	public $introduced_by;

	public function __construct(){}
}
