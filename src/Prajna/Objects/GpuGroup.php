<?php

namespace Prajna\Objects;

class GpuGroup
{
	public $uuid;
	public $name_label;
	public $name_description;
	public $PGPUs;
	public $VGPUs;
	public $GPU_types;
	public $other_config;

	public function __construct(){}
}
