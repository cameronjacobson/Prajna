<?php

namespace Prajna;

use \Zend\XmlRpc\Client;
use \Zend\XmlRpc\Request;
use \Zend\XmlRpc\Response;
use \Zend\XmlRpc\AbstractValue;
use \Prajna\PrajnaException;
use \Prajna\Components\Task;
use \Prajna\Components\Event;
use \Prajna\Components\VM;
use \Prajna\Components\VMMetrics;
use \Prajna\Components\VMGuestMetrics;
use \Prajna\Components\Host;
use \Prajna\Components\HostMetrics;
use \Prajna\Components\HostCpu;
use \Prajna\Components\Network;
use \Prajna\Components\VIF;
use \Prajna\Components\VIFMetrics;
use \Prajna\Components\PIF;
use \Prajna\Components\PIFMetrics;
use \Prajna\Components\SR;
use \Prajna\Components\VDI;
use \Prajna\Components\VBD;
use \Prajna\Components\PBD;
use \Prajna\Components\CrashDump;
use \Prajna\Components\VTPM;
use \Prajna\Components\Console;
use \Prajna\Components\DPCI;
use \Prajna\Components\PPCI;
use \Prajna\Components\User;
use \Prajna\Components\XSPolicy;
use \Prajna\Components\ACMPolicy;
use \Prajna\Components\Debug;
use \Prajna\Traits\XmlRpcHelper;

class Prajna extends Client
{
	use XmlRpcHelper;

	public $session_id;
	public $username;
	public $uuid;
	public $host;
	public $url;

	public function __construct(Array $options){
		parent::__construct($options['url']);
		$this->client = $this;
		$this->url = $options['url'];
		$this->host = parse_url($options['url'],PHP_URL_HOST);
		$this->username = $options['username'];
		$this->session_id = $this->doCall('session.login_with_password',array(
			$options['username'],
			$options['password']
		));
		list(,$this->uuid) = explode(':',$this->session_id);
	}

	public function change_password($old_pwd,$new_pwd){
		return $this->doCall('session.change_password',array(
			$this->session_id,
			$old_pwd,
			$new_pwd
		));
	}

	public function slave_local_login_with_password($user,$pass){
		return $this->doCall('session.slave_local_login_with_password',array(
			$user,
			$pass
		));
	}

	public function logout(){
		$this->doCall('session.logout',array(
			$this->session_id
		));
		return true;
	}

	public function local_logout(){
		$this->doCall('session.local_logout',array(
			$this->session_id
		));
		return true;
	}

	public function get_all_subject_identifiers(){
		return $this->doCall('session.get_all_subject_identifiers',array(
			$this->session_id
		));
	}

	public function logout_subject_identifier($subject_identifier){
		return $this->doCall('session.logout_subject_identifier',array(
			$this->session_id,
			$subject_identifier
		));
	}

	public function get_uuid(){
		return $this->doCall('session.get_uuid',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function get_this_host(){
		return $this->doCall('session.get_this_host',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function get_this_user(){
		return $this->doCall('session.get_this_user',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function get_last_active(){
		return $this->doCall('session.get_last_active',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function get_pool(){
		return $this->doCall('session.get_pool',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function get_other_config(){
		return $this->doCall('session.get_other_config',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function set_other_config(Array $config){
		return $this->doCall('session.set_other_config',array(
			$this->session_id,
			$this->session_id,
			$config
		));
	}

	public function add_to_other_config($key,$value){
		return $this->doCall('session.add_to_other_config',array(
			$this->session_id,
			$this->session_id,
			$key,
			$value
		));
	}

	public function remove_from_other_config($key){
		return $this->doCall('session.remove_from_other_config',array(
			$this->session_id,
			$this->session_id,
			$key
		));
	}

	public function get_is_local_superuser(){
		return $this->doCall('session.get_is_local_superuser',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function get_subject(){
		return $this->doCall('session.get_subject',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function get_validation_time(){
		return $this->doCall('session.get_validation_time',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function get_auth_user_sid(){
		return $this->doCall('session.get_auth_user_sid',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function get_auth_user_name(){
		return $this->doCall('session.get_auth_user_name',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function get_tasks(){
		return $this->doCall('session.get_tasks',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function get_parent(){
		return $this->doCall('session.get_parent',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function get_rbac_permissions(){
		return $this->doCall('session.get_rbac_permissions',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function get_record(){
		return $this->doCall('session.get_record',array(
			$this->session_id,
			$this->session_id
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('session.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}





	/*  GET COMPONENTS */

	public function task(){
		return new Task($this);
	}

	public function event(){
		return new Event($this);
	}

	public function VM(){
		return new VM($this);
	}

	public function VM_metrics(){
		return new VMMetrics($this);
	}

	public function VM_guest_metrics(){
		return new VMGuestMetrics($this);
	}

	public function host(){
		return new Host($this);
	}

	public function host_metrics(){
		return new HostMetrics($this);
	}

	public function host_cpu(){
		return new HostCpu($this);
	}

	public function network(){
		return new Network($this);
	}

	public function VIF(){
		return new VIF($this);
	}

	public function VIF_metrics(){
		return new VIFMetrics($this);
	}

	public function PIF(){
		return new PIF($this);
	}

	public function PIF_metrics(){
		return new PIFMetrics($this);
	}

	public function SR(){
		return new SR($this);
	}

	public function VDI(){
		return new VDI($this);
	}

	public function VBD(){
		return new VBD($this);
	}

	public function VBD_metrics(){
		return new VBDMetrics($this);
	}

	public function PBD(){
		return new PBD($this);
	}

	public function crashdump(){
		return new CrashDump($this);
	}

	public function VTPM(){
		return new VTPM($this);
	}

	public function console(){
		return new Console($this);
	}

	public function DPCI(){
		return new DPCI($this);
	}

	public function PPCI(){
		return new PPCI($this);
	}

	public function user(){
		return new User($this);
	}

	public function XSPolicy(){
		return new XSPolicy($this);
	}

	public function ACMPolicy(){
		return new ACMPolicy($this);
	}

	public function debug(){
		return new Debug($this);
	}

	public function __sleep(){
		return array('session_id','username','uuid','host','url');
	}

	public function __wakeup(){
		parent::__construct($this->url);
	}
}
