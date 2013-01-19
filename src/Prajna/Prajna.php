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

	protected $session_id;
	protected $user;
	protected $uuid;
	protected $host;

	public function __construct(Array $options){
		parent::__construct($options['url']);
		$this->host = parse_url($options['url'],PHP_URL_HOST);
		$this->user = $options['user'];
		$this->session_id = $this->doCall('session.login_with_password',array(
			$options['user'],
			$options['pass']
		));
		list(,$this->uuid) = explode(':',$this->session_id);
	}

	public function logout(){
		$this->doCall('session.logout',array(
			$this->session_id
		));
		return true;
	}

	public function get_uuid(){
		return $this->uuid;
	}

	public function get_this_host(){
		return $this->host;
	}

	public function get_this_user(){
		return $this->user;
	}

	public function get_last_active(){
		return time();
	}

	public function get_record(){
		return array(
			'uuid'=>$this->uuid,
			'this_host'=>$this->host,
			'this_user'=>$this->user,
			'last_active'=>time()
		);
	}

	public function &get_by_uuid($uuid){
		if($uuid === $this->uuid){
			return $this;
		}
		throw new PrajnaException('invalid uuid');
	}

	public function task(){
		return new Task($this->session_id);
	}

	public function event(){
		return new Event($this->session_id);
	}

	public function VM(){
		return new VM($this->session_id);
	}

	public function VM_metrics(){
		return new VMMetrics($this->session_id);
	}

	public function VM_guest_metrics(){
		return new VMGuestMetrics($this->session_id);
	}

	public function host(){
		return new Host($this->session_id);
	}

	public function host_metrics(){
		return new HostMetrics($this->session_id);
	}

	public function host_cpu(){
		return new HostCpu($this->session_id);
	}

	public function network(){
		return new Network($this->session_id);
	}

	public function VIF(){
		return new VIF($this->session_id);
	}

	public function VIF_metrics(){
		return new VIFMetrics($this->session_id);
	}

	public function PIF(){
		return new PIF($this->session_id);
	}

	public function PIF_metrics(){
		return new PIFMetrics($this->session_id);
	}

	public function SR(){
		return new SR($this->session_id);
	}

	public function VDI(){
		return new VDI($this->session_id);
	}

	public function VBD(){
		return new VBD($this->session_id);
	}

	public function VBD_metrics(){
		return new VBDMetrics($this->session_id);
	}

	public function PBD(){
		return new PBD($this->session_id);
	}

	public function crashdump(){
		return new CrashDump($this->session_id);
	}

	public function VTPM(){
		return new VTPM($this->session_id);
	}

	public function console(){
		return new Console($this->session_id);
	}

	public function DPCI(){
		return new DPCI($this->session_id);
	}

	public function PPCI(){
		return new PPCI($this->session_id);
	}

	public function user(){
		return new User($this->session_id);
	}

	public function XSPolicy(){
		return new XSPolicy($this->session_id);
	}

	public function ACMPolicy(){
		return new ACMPolicy($this->session_id);
	}

	public function debug(){
		return new Debug($this->session_id);
	}
}