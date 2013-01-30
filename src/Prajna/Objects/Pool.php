<?php

namespace Prajna\Objects;

class Pool
{
	public $uuid;
	public $name_label;
	public $name_description;
	public $master;
	public $default_SR;
	public $suspend_image_SR;
	public $crash_dump_SR;
	public $other_config;
	public $ha_enabled;
	public $ha_configuration;
	public $ha_statefiles;
	public $ha_host_failures_to_tolerate;
	public $ha_plan_exists_for;
	public $ha_allow_overcommit;
	public $ha_overcommitted;
	public $blobs;
	public $tags;
	public $gui_config;
	public $wlb_url;
	public $wlb_username;
	public $wlb_password;
	public $wlb_enabled;
	public $wlb_verify_cert;
	public $redo_log_enabled;
	public $redo_log_vdi;
	public $vswitch_controller;
	public $restrictions;
	public $metadata_VDIs;

	public function __construct(){}
}
