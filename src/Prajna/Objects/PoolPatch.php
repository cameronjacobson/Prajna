<?php

namespace Prajna\Objects;

class PoolPatch
{
	public $uuid;
	public $name_label;
	public $name_description;
	public $version;
	public $filename;
	public $size;
	public $pool_applied;
	public $host_patches;
	public $after_apply_guidance;
	public $other_config;

	public function __construct(){}
}
