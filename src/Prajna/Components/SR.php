<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class SR
{
	use XmlRpcHelper;

	protected $session_id;

    public function __construct($client){
        $this->client = $client;
        $this->session_id = $this->client->session_id;
    }

	public function get_supported_types(){
        return $this->doCall('SR.get_supported_types',array(
            $this->session_id
        ));
	}

	public function get_all(){
        return $this->doCall('SR.get_all',array(
            $this->session_id
        ));
	}

	public function get_uuid($SR){
        return $this->doCall('SR.get_uuid',array(
            $this->session_id,
			$SR
        ));
	}

	public function get_name_label($SR){
        return $this->doCall('SR.get_name_label',array(
            $this->session_id,
			$SR
        ));
	}

	public function set_name_label($SR,$label){
        return $this->doCall('SR.set_name_label',array(
            $this->session_id,
			$SR,
			$label
        ));
	}

	public function get_name_description($SR){
        return $this->doCall('SR.get_name_description',array(
            $this->session_id,
			$SR
        ));
	}

	public function set_name_description($SR,$description){
        return $this->doCall('SR.set_name_description',array(
            $this->session_id,
			$SR,
			$description
        ));
	}

	public function get_VDIs($SR){
        return $this->doCall('SR.get_VDIs',array(
            $this->session_id,
			$SR
        ));
	}

	public function get_PBDs($SR){
        return $this->doCall('SR.get_PBDs',array(
            $this->session_id,
			$SR
        ));
	}

	public function get_virtual_allocation($SR){
        return $this->doCall('SR.get_virtual_allocation',array(
            $this->session_id,
			$SR
        ));
	}

	public function get_physical_utilisation($SR){
        return $this->doCall('SR.get_physical_utilisation',array(
            $this->session_id,
			$SR
        ));
	}

	public function get_physical_size($SR){
        return $this->doCall('SR.get_physical_size',array(
            $this->session_id,
			$SR
        ));
	}

	public function get_type($SR){
        return $this->doCall('SR.get_type',array(
            $this->session_id,
			$SR
        ));
	}

	public function get_content_type($SR){
        return $this->doCall('SR.get_content_type',array(
            $this->session_id,
			$SR
        ));
	}

	public function get_by_uuid($uuid){
        return $this->doCall('SR.get_by_uuid',array(
            $this->session_id,
			$uuid
        ));
	}

	public function get_record($SR){
        return $this->doCall('SR.get_record',array(
            $this->session_id,
			$SR
        ));
	}

	public function get_by_name_label($label){
        return $this->doCall('SR.get_by_name_label',array(
            $this->session_id,
			$label
        ));
	}
}
