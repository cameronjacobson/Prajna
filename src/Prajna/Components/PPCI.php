<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class PPCI
{
	use XmlRpcHelper;

	protected $session_id;

    public function __construct($client){
        $this->client = $client;
        $this->session_id = $this->client->session_id;
    }

	public function get_all(){
        return $this->doCall('PPCI.get_all',array(
            $this->session_id
        ));
	}
	public function get_uuid($PPCI){
        return $this->doCall('PPCI.get_uuid',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_host($PPCI){
        return $this->doCall('PPCI.get_host',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_domain($PPCI){
        return $this->doCall('PPCI.get_domain',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_bus($PPCI){
        return $this->doCall('PPCI.get_bus',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_slot($PPCI){
        return $this->doCall('PPCI.get_slot',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_func($PPCI){
        return $this->doCall('PPCI.get_func',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_name($PPCI){
        return $this->doCall('PPCI.get_name',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_vendor_id($PPCI){
        return $this->doCall('PPCI.get_vendor_id',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_vendor_name($PPCI){
        return $this->doCall('PPCI.get_vendor_name',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_device_id($PPCI){
        return $this->doCall('PPCI.get_device_id',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_device_name($PPCI){
        return $this->doCall('PPCI.get_device_id',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_revision_id($PPCI){
        return $this->doCall('PPCI.get_revision_id',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_class_code($PPCI){
        return $this->doCall('PPCI.get_class_code',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_class_name($PPCI){
        return $this->doCall('PPCI.get_class_name',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_subsystem_vendor_id($PPCI){
        return $this->doCall('PPCI.get_subsystem_vendor_id',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_subsystem_vendor_name($PPCI){
        return $this->doCall('PPCI.get_subsystem_vendor_name',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_subsystem_id($PPCI){
        return $this->doCall('PPCI.get_subsystem_id',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_subsystem_name($PPCI){
        return $this->doCall('PPCI.get_subsystem_name',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_driver($PPCI){
        return $this->doCall('PPCI.get_driver',array(
            $this->session_id,
			$PPCI
        ));
	}
	public function get_by_uuid($uuid){
        return $this->doCall('PPCI.get_by_uuid',array(
            $this->session_id,
			$uuid
        ));
	}
	public function get_record($PPCI){
        return $this->doCall('PPCI.get_record',array(
            $this->session_id,
			$PPCI
        ));
	}
}
