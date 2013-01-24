<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class DPCI
{
	use XmlRpcHelper;

	protected $session_id;

    public function __construct($client){
        $this->client = $client;
        $this->session_id = $this->client->session_id;
    }

	public function get_all(){
        return $this->doCall('DPCI.get_all',array(
            $this->session_id
        ));
	}

	public function get_uuid($DPCI){
        return $this->doCall('DPCI.get_uuid',array(
            $this->session_id,
			$DPCI
        ));
	}

	public function get_VM($DPCI){
        return $this->doCall('DPCI.get_VM',array(
            $this->session_id,
			$DPCI
        ));
	}

	public function get_PPCI($DPCI){
        return $this->doCall('DPCI.get_PPCI',array(
            $this->session_id,
			$DPCI
        ));
	}

	public function get_hotplug_slot($DPCI){
        return $this->doCall('DPCI.get_hotplug_slot',array(
            $this->session_id,
			$DPCI
        ));
	}

	public function get_virtual_domain($DPCI){
        return $this->doCall('DPCI.get_virtual_domain',array(
            $this->session_id,
			$DPCI
        ));
	}

	public function get_virtual_bus($DPCI){
        return $this->doCall('DPCI.get_virtual_bus',array(
            $this->session_id,
			$DPCI
        ));
	}

	public function get_virtual_slot($DPCI){
        return $this->doCall('DPCI.get_virtual_slot',array(
            $this->session_id,
			$DPCI
        ));
	}

	public function get_virtual_func($DPCI){
        return $this->doCall('DPCI.get_virtual_func',array(
            $this->session_id,
			$DPCI
        ));
	}

	public function get_virtual_name($DPCI){
        return $this->doCall('DPCI.get_virtual_name',array(
            $this->session_id,
			$DPCI
        ));
	}

	public function create($args){
        return $this->doCall('DPCI.create',array(
            $this->session_id,
			$args
        ));
	}

	public function destroy($DPCI){
        return $this->doCall('DPCI.destroy',array(
            $this->session_id,
			$DPCI
        ));
	}

	public function get_by_uuid($uuid){
        return $this->doCall('DPCI.get_by_uuid',array(
            $this->session_id,
			$uuid
        ));
	}

	public function get_record($DPCI){
        return $this->doCall('DPCI.get_record',array(
            $this->session_id,
			$DPCI
        ));
	}
}
