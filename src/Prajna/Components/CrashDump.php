<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class CrashDump
{
	use XmlRpcHelper;

	protected $session_id;

    public function __construct($client){
        $this->client = $client;
        $this->session_id = $this->client->session_id;
    }

	public function destroy($crashdump){
        return $this->doCall('crashdump.destroy',array(
            $this->session_id,
			$crashdump
        ));
	}

	public function get_all(){
        return $this->doCall('crashdump.get_all',array(
            $this->session_id
        ));
	}

	public function get_uuid($crashdump){
        return $this->doCall('crashdump.get_uuid',array(
            $this->session_id,
			$crashdump
        ));
	}

	public function get_VM($crashdump){
        return $this->doCall('crashdump.get_VM',array(
            $this->session_id,
			$crashdump
        ));
	}

	public function get_VDI($crashdump){
        return $this->doCall('crashdump.get_VDI',array(
            $this->session_id,
			$crashdump
        ));
	}

	public function get_by_uuid($uuid){
        return $this->doCall('crashdump.get_by_uuid',array(
            $this->session_id,
			$uuid
        ));
	}

	public function get_record($crashdump){
        return $this->doCall('crashdump.get_record',array(
            $this->session_id,
			$crashdump
        ));
	}
}
