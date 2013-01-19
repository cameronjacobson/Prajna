<?php

namespace Prajna\Traits;

use \Zend\XmlRpc\Request;
use \Prajna\PrajnaException;

trait XmlRpcHelper
{
    protected function doCall($method,$params){
        $request = new Request();
        $request->setMethod($method);
        $request->setParams($params);
        $this->doRequest($request);
        $resp = $this->getLastResponse();
        $response = $this->returnResponse($this->getLastResponse());
        return $response['Value'];
    }

    protected function returnResponse($response){
        $responseValue = $response->getReturnValue();
        if($responseValue['Status'] === 'Failure'){
            throw new PrajnaException($responseValue['ErrorDescription']);
        }
        return $response->getReturnValue();
    }
}
