<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Debug
{
	use XmlRpcHelper;

	protected $session_id;

    public function __construct($client){
        $this->client = $client;
        $this->session_id = $this->client->session_id;
    }

	public function get_all(){
        return $this->doCall('debug.get_all',array(
            $this->session_id
        ));
	}

	public function return_failure(){
        return $this->doCall('debug.get_all',array(
            $this->session_id
        ));
	}

	public function create($args){
        return $this->doCall('debug.create',array(
            $this->session_id,
			$args
        ));
	}

	public function destroy($debug){
        return $this->doCall('debug.destroy',array(
            $this->session_id,
			$debug
        ));
	}

	public function get_by_uuid($uuid){
        return $this->doCall('debug.get_by_uuid',array(
            $this->session_id,
			$uuid
        ));
	}

	public function get_record($debug){
        return $this->doCall('debug.get_record',array(
            $this->session_id,
			$debug
        ));
	}
}
