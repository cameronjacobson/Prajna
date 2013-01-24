<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Console
{
	use XmlRpcHelper;

	protected $session_id;

    public function __construct($client){
        $this->client = $client;
        $this->session_id = $this->client->session_id;
    }

	public function get_all(){
        return $this->doCall('console.get_all',array(
            $this->session_id
        ));
	}

	public function get_uuid($console){
        return $this->doCall('console.get_uuid',array(
            $this->session_id,
			$console
        ));
	}

	public function get_protocol($console){
        return $this->doCall('console.get_protocol',array(
            $this->session_id,
			$console
        ));
	}

	public function get_location($console){
        return $this->doCall('console.get_location',array(
            $this->session_id,
			$console
        ));
	}

	public function get_VM($console){
        return $this->doCall('console.get_VM',array(
            $this->session_id,
			$console
        ));
	}

	public function get_other_config($console){
        return $this->doCall('console.get_other_config',array(
            $this->session_id,
			$console
        ));
	}

	public function set_other_config($console,$config){
        return $this->doCall('console.set_other_config',array(
            $this->session_id,
			$console,
			$config
        ));
	}

	public function add_to_other_config($console,$key,$value){
        return $this->doCall('console.add_to_other_config',array(
            $this->session_id,
			$console,
			$key,
			$value
        ));
	}

	public function remove_from_other_config($console,$key){
        return $this->doCall('console.remove_from_other_config',array(
            $this->session_id,
			$console,
			$key
        ));
	}

	public function create($args){
        return $this->doCall('console.create',array(
            $this->session_id,
			$args
        ));
	}

	public function destroy($console){
        return $this->doCall('console.destroy',array(
            $this->session_id,
			$console
        ));
	}

	public function get_by_uuid($uuid){
        return $this->doCall('console.get_by_uuid',array(
            $this->session_id,
			$uuid
        ));
	}

	public function get_record($console){
        return $this->doCall('console.get_record',array(
            $this->session_id,
			$console
        ));
	}
}
