<?php

namespace Prajna\Objects;

class HostPatch
{
	public $uuid;
	public $name_label;
	public $name_description;
	public $version;
	public $host;
	public $filename;
	public $applied;
	public $timestamp_applied;
	public $size;
	public $pool_patch;
	public $other_config;

	public function __construct(){}
}
