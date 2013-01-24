<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class PBD
{
	use XmlRpcHelper;

	protected $session_id;

    public function __construct($client){
        $this->client = $client;
        $this->session_id = $this->client->session_id;
    }

	public function get_all(){
        return $this->doCall('PBD.get_all',array(
            $this->session_id
        ));
	}

	public function get_uuid($PBD){
		return $this->doCall('PBD.get_uuid',array(
			$this->session_id,
			$PBD
		));
	}

	public function get_host($PBD){
        return $this->doCall('PBD.get_host',array(
            $this->session_id,
			$PBD
        ));
	}

	public function get_SR($PBD){
        return $this->doCall('PBD.get_SR',array(
            $this->session_id,
			$PBD
        ));
	}

	public function get_device_config($PBD){
        return $this->doCall('PBD.get_device_config',array(
            $this->session_id,
			$PBD
        ));
	}

	public function get_currently_attached($PBD){
        return $this->doCall('PBD.get_currently_attached',array(
            $this->session_id,
			$PBD
        ));
	}

	public function create(Array $PBDRecord){
        return $this->doCall('PBD.create',array(
            $this->session_id,
			$PBDRecord
        ));
	}

	public function destroy($PBD){
        return $this->doCall('PBD.destroy',array(
            $this->session_id,
			$PBD
        ));
	}

	public function get_by_uuid($uuid){
        return $this->doCall('PBD.get_by_uuid',array(
            $this->session_id,
			$uuid
        ));
	}

	public function get_record($PBD){
        return $this->doCall('PBD.get_record',array(
            $this->session_id,
			$PBD
        ));
	}
}
