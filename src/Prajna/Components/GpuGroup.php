<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class GpuGroup
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_all(){
		return $this->doCall('GPU_group.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('GPU_group.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($GPU_group){
		return $this->doCall('GPU_group.get_uuid',array(
			$this->session_id,
			$GPU_group
		));
	}

	public function get_name_label($GPU_group){
		return $this->doCall('GPU_group.get_name_label',array(
			$this->session_id,
			$GPU_group
		));
	}

	public function set_name_label($GPU_group,$name_label){
		return $this->doCall('GPU_group.set_name_label',array(
			$this->session_id,
			$GPU_group,
			$name_label
		));
	}

	public function get_name_description($GPU_group){
		return $this->doCall('GPU_group.get_name_description',array(
			$this->session_id,
			$GPU_group
		));
	}

	public function set_name_description($GPU_group,$name_description){
		return $this->doCall('GPU_group.set_name_description',array(
			$this->session_id,
			$GPU_group,
			$name_description
		));
	}

	public function get_PGPUs($GPU_group){
		return $this->doCall('GPU_group.get_PGPUs',array(
			$this->session_id,
			$GPU_group
		));
	}

	public function get_VGPUs($GPU_group){
		return $this->doCall('GPU_group.get_VGPUs',array(
			$this->session_id,
			$GPU_group
		));
	}

	public function get_GPU_types($GPU_group){
		return $this->doCall('GPU_group.get_GPU_types',array(
			$this->session_id,
			$GPU_group
		));
	}

    public function get_other_config($GPU_group){
        return $this->doCall('GPU_group.get_other_config',array(
            $this->session_id,
            $GPU_group
        ));
    }

    public function set_other_config($GPU_group,Array $config){
        return $this->doCall('GPU_group.set_other_config',array(
            $this->session_id,
            $GPU_group,
            $config
        ));
    }

    public function add_to_other_config($GPU_group,$key,$value){
        return $this->doCall('GPU_group.add_to_other_config',array(
            $this->session_id,
            $GPU_group,
            $key,
            $value
        ));
    }

    public function remove_from_other_config($GPU_group,$key){
        return $this->doCall('GPU_group.remove_from_other_config',array(
            $this->session_id,
            $GPU_group,
            $key
        ));
    }

	public function get_by_uuid($uuid){
		return $this->doCall('GPU_group.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($GPU_group){
		return $this->doCall('GPU_group.get_record',array(
			$this->session_id,
			$GPU_group
		));
	}

	public function get_by_name_label($name_label){
		return $this->doCall('GPU_group.get_by_name_label',array(
			$this->session_id,
			$name_label
		));
	}
}
