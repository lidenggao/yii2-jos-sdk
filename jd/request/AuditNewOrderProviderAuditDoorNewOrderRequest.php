<?php
class AuditNewOrderProviderAuditDoorNewOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.AuditNewOrderProvider.auditDoorNewOrder";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $serviceId;
                              public function setServiceId($serviceId ){
                 $this->serviceId=$serviceId;
                 $this->apiParas["serviceId"] = $serviceId;
              }

              public function getServiceId(){
              	return $this->serviceId;
              }
                                                                                                                                        	                   			private $expressVendor;
    	                        
	public function setExpressVendor($expressVendor){
		$this->expressVendor = $expressVendor;
         $this->apiParas["expressVendor"] = $expressVendor;
	}

	public function getExpressVendor(){
	  return $this->expressVendor;
	}

                        	                   			private $pickwareType;
    	                        
	public function setPickwareType($pickwareType){
		$this->pickwareType = $pickwareType;
         $this->apiParas["pickwareType"] = $pickwareType;
	}

	public function getPickwareType(){
	  return $this->pickwareType;
	}

                                            		                                    	                   			private $approveNotes;
    	                        
	public function setApproveNotes($approveNotes){
		$this->approveNotes = $approveNotes;
         $this->apiParas["approveNotes"] = $approveNotes;
	}

	public function getApproveNotes(){
	  return $this->approveNotes;
	}

                        	                        	                        	                   			private $customizedSmsType;
    	                        
	public function setCustomizedSmsType($customizedSmsType){
		$this->customizedSmsType = $customizedSmsType;
         $this->apiParas["customizedSmsType"] = $customizedSmsType;
	}

	public function getCustomizedSmsType(){
	  return $this->customizedSmsType;
	}

                        	                   			private $platformSrc;
    	                        
	public function setPlatformSrc($platformSrc){
		$this->platformSrc = $platformSrc;
         $this->apiParas["platformSrc"] = $platformSrc;
	}

	public function getPlatformSrc(){
	  return $this->platformSrc;
	}

                                                                        		                                                        		                                    	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $village;
    	                        
	public function setVillage($village){
		$this->village = $village;
         $this->apiParas["village"] = $village;
	}

	public function getVillage(){
	  return $this->village;
	}

                        	                   			private $detailAddress;
    	                        
	public function setDetailAddress($detailAddress){
		$this->detailAddress = $detailAddress;
         $this->apiParas["detailAddress"] = $detailAddress;
	}

	public function getDetailAddress(){
	  return $this->detailAddress;
	}

                                                    	                   			private $contactsName;
    	                        
	public function setContactsName($contactsName){
		$this->contactsName = $contactsName;
         $this->apiParas["contactsName"] = $contactsName;
	}

	public function getContactsName(){
	  return $this->contactsName;
	}

                        	                   			private $contactsTel;
    	                        
	public function setContactsTel($contactsTel){
		$this->contactsTel = $contactsTel;
         $this->apiParas["contactsTel"] = $contactsTel;
	}

	public function getContactsTel(){
	  return $this->contactsTel;
	}

                        	                   			private $contactsPhone;
    	                        
	public function setContactsPhone($contactsPhone){
		$this->contactsPhone = $contactsPhone;
         $this->apiParas["contactsPhone"] = $contactsPhone;
	}

	public function getContactsPhone(){
	  return $this->contactsPhone;
	}

                        	                   			private $contactsZipCode;
    	                        
	public function setContactsZipCode($contactsZipCode){
		$this->contactsZipCode = $contactsZipCode;
         $this->apiParas["contactsZipCode"] = $contactsZipCode;
	}

	public function getContactsZipCode(){
	  return $this->contactsZipCode;
	}

                                                                        		                                                        		                                    	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $village;
    	                        
	public function setVillage($village){
		$this->village = $village;
         $this->apiParas["village"] = $village;
	}

	public function getVillage(){
	  return $this->village;
	}

                        	                   			private $detailAddress;
    	                        
	public function setDetailAddress($detailAddress){
		$this->detailAddress = $detailAddress;
         $this->apiParas["detailAddress"] = $detailAddress;
	}

	public function getDetailAddress(){
	  return $this->detailAddress;
	}

                                                    	                   			private $contactsName;
    	                        
	public function setContactsName($contactsName){
		$this->contactsName = $contactsName;
         $this->apiParas["contactsName"] = $contactsName;
	}

	public function getContactsName(){
	  return $this->contactsName;
	}

                        	                   			private $contactsTel;
    	                        
	public function setContactsTel($contactsTel){
		$this->contactsTel = $contactsTel;
         $this->apiParas["contactsTel"] = $contactsTel;
	}

	public function getContactsTel(){
	  return $this->contactsTel;
	}

                        	                   			private $contactsPhone;
    	                        
	public function setContactsPhone($contactsPhone){
		$this->contactsPhone = $contactsPhone;
         $this->apiParas["contactsPhone"] = $contactsPhone;
	}

	public function getContactsPhone(){
	  return $this->contactsPhone;
	}

                        	                   			private $contactsZipCode;
    	                        
	public function setContactsZipCode($contactsZipCode){
		$this->contactsZipCode = $contactsZipCode;
         $this->apiParas["contactsZipCode"] = $contactsZipCode;
	}

	public function getContactsZipCode(){
	  return $this->contactsZipCode;
	}

                                                                        		                                    	                   			private $appointDateBegin;
    	                        
	public function setAppointDateBegin($appointDateBegin){
		$this->appointDateBegin = $appointDateBegin;
         $this->apiParas["appointDateBegin"] = $appointDateBegin;
	}

	public function getAppointDateBegin(){
	  return $this->appointDateBegin;
	}

                        	                   			private $appointDateEnd;
    	                        
	public function setAppointDateEnd($appointDateEnd){
		$this->appointDateEnd = $appointDateEnd;
         $this->apiParas["appointDateEnd"] = $appointDateEnd;
	}

	public function getAppointDateEnd(){
	  return $this->appointDateEnd;
	}

                        	                   			private $appointDateStr;
    	                        
	public function setAppointDateStr($appointDateStr){
		$this->appointDateStr = $appointDateStr;
         $this->apiParas["appointDateStr"] = $appointDateStr;
	}

	public function getAppointDateStr(){
	  return $this->appointDateStr;
	}

                        	                   			private $appointDateType;
    	                        
	public function setAppointDateType($appointDateType){
		$this->appointDateType = $appointDateType;
         $this->apiParas["appointDateType"] = $appointDateType;
	}

	public function getAppointDateType(){
	  return $this->appointDateType;
	}

                        	                   			private $reserveDate;
    	                        
	public function setReserveDate($reserveDate){
		$this->reserveDate = $reserveDate;
         $this->apiParas["reserveDate"] = $reserveDate;
	}

	public function getReserveDate(){
	  return $this->reserveDate;
	}

                        	                   			private $sendPay;
    	                        
	public function setSendPay($sendPay){
		$this->sendPay = $sendPay;
         $this->apiParas["sendPay"] = $sendPay;
	}

	public function getSendPay(){
	  return $this->sendPay;
	}

                                                                        		                                    	                   			private $operatorPin;
    	                        
	public function setOperatorPin($operatorPin){
		$this->operatorPin = $operatorPin;
         $this->apiParas["operatorPin"] = $operatorPin;
	}

	public function getOperatorPin(){
	  return $this->operatorPin;
	}

                        	                   			private $operatorNick;
    	                        
	public function setOperatorNick($operatorNick){
		$this->operatorNick = $operatorNick;
         $this->apiParas["operatorNick"] = $operatorNick;
	}

	public function getOperatorNick(){
	  return $this->operatorNick;
	}

                        	                   			private $operatorRemark;
    	                        
	public function setOperatorRemark($operatorRemark){
		$this->operatorRemark = $operatorRemark;
         $this->apiParas["operatorRemark"] = $operatorRemark;
	}

	public function getOperatorRemark(){
	  return $this->operatorRemark;
	}

                        	                   			private $operatorDate;
    	                        
	public function setOperatorDate($operatorDate){
		$this->operatorDate = $operatorDate;
         $this->apiParas["operatorDate"] = $operatorDate;
	}

	public function getOperatorDate(){
	  return $this->operatorDate;
	}

                        	                   			private $platformSrc;
    	                        
	public function setPlatformSrc($platformSrc){
		$this->platformSrc = $platformSrc;
         $this->apiParas["platformSrc"] = $platformSrc;
	}

	public function getPlatformSrc(){
	  return $this->platformSrc;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $afsApplyDetailId;
                              public function setAfsApplyDetailId($afsApplyDetailId ){
                 $this->afsApplyDetailId=$afsApplyDetailId;
                 $this->apiParas["afsApplyDetailId"] = $afsApplyDetailId;
              }

              public function getAfsApplyDetailId(){
              	return $this->afsApplyDetailId;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareId;
                              public function setWareId($wareId ){
                 $this->wareId=$wareId;
                 $this->apiParas["wareId"] = $wareId;
              }

              public function getWareId(){
              	return $this->wareId;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareName;
                              public function setWareName($wareName ){
                 $this->wareName=$wareName;
                 $this->apiParas["wareName"] = $wareName;
              }

              public function getWareName(){
              	return $this->wareName;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareDescribe;
                              public function setWareDescribe($wareDescribe ){
                 $this->wareDescribe=$wareDescribe;
                 $this->apiParas["wareDescribe"] = $wareDescribe;
              }

              public function getWareDescribe(){
              	return $this->wareDescribe;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareType;
                              public function setWareType($wareType ){
                 $this->wareType=$wareType;
                 $this->apiParas["wareType"] = $wareType;
              }

              public function getWareType(){
              	return $this->wareType;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                               private $afsApplyDetailId;
                              public function setAfsApplyDetailId($afsApplyDetailId ){
                 $this->afsApplyDetailId=$afsApplyDetailId;
                 $this->apiParas["afsApplyDetailId"] = $afsApplyDetailId;
              }

              public function getAfsApplyDetailId(){
              	return $this->afsApplyDetailId;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareId;
                              public function setWareId($wareId ){
                 $this->wareId=$wareId;
                 $this->apiParas["wareId"] = $wareId;
              }

              public function getWareId(){
              	return $this->wareId;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareName;
                              public function setWareName($wareName ){
                 $this->wareName=$wareName;
                 $this->apiParas["wareName"] = $wareName;
              }

              public function getWareName(){
              	return $this->wareName;
              }
                                                                                                                                                                                                                                                                                                                                              private $warePrice;
                              public function setWarePrice($warePrice ){
                 $this->warePrice=$warePrice;
                 $this->apiParas["warePrice"] = $warePrice;
              }

              public function getWarePrice(){
              	return $this->warePrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareQty;
                              public function setWareQty($wareQty ){
                 $this->wareQty=$wareQty;
                 $this->apiParas["wareQty"] = $wareQty;
              }

              public function getWareQty(){
              	return $this->wareQty;
              }
                                                                                                                                        	                   			private $afterServiceProvider;
    	                        
	public function setAfterServiceProvider($afterServiceProvider){
		$this->afterServiceProvider = $afterServiceProvider;
         $this->apiParas["afterServiceProvider"] = $afterServiceProvider;
	}

	public function getAfterServiceProvider(){
	  return $this->afterServiceProvider;
	}

                        	                   			private $deliveryCenterId;
    	                        
	public function setDeliveryCenterId($deliveryCenterId){
		$this->deliveryCenterId = $deliveryCenterId;
         $this->apiParas["deliveryCenterId"] = $deliveryCenterId;
	}

	public function getDeliveryCenterId(){
	  return $this->deliveryCenterId;
	}

                        	                   			private $deliveryCenterName;
    	                        
	public function setDeliveryCenterName($deliveryCenterName){
		$this->deliveryCenterName = $deliveryCenterName;
         $this->apiParas["deliveryCenterName"] = $deliveryCenterName;
	}

	public function getDeliveryCenterName(){
	  return $this->deliveryCenterName;
	}

                        	                   			private $newOrderOrgId;
    	                        
	public function setNewOrderOrgId($newOrderOrgId){
		$this->newOrderOrgId = $newOrderOrgId;
         $this->apiParas["newOrderOrgId"] = $newOrderOrgId;
	}

	public function getNewOrderOrgId(){
	  return $this->newOrderOrgId;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                   			private $applyReson;
    	                        
	public function setApplyReson($applyReson){
		$this->applyReson = $applyReson;
         $this->apiParas["applyReson"] = $applyReson;
	}

	public function getApplyReson(){
	  return $this->applyReson;
	}

                            }





        
 

