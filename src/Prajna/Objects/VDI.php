<?php

namespace Prajna\Objects;

class VDI
{
	public $uuid;
	public $name_label;
	public $name_description;
	public $SR;
	public $VBDs;
	public $crash_dumps;
	public $virtual_size;
	public $physical_utilisation;
	public $type;
	public $sharable;
	public $read_only;
	public $other_config;
	public $security_label;

	public function __construct(){}
}
