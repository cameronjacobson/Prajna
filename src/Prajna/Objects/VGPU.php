<?php

namespace Prajna\Objects;

class VGPU
{
	public $uuid;
	public $VM;
	public $GPU_group;
	public $device;
	public $currently_attached;
	public $other_config;

	public function __construct(){}
}
