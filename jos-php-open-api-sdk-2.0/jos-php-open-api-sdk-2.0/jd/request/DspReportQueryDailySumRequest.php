<?php
class DspReportQueryDailySumRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.report.queryDailySum";
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
                                                        		                                    	                   			private $startDay;
    	                        
	public function setStartDay($startDay){
		$this->startDay = $startDay;
         $this->apiParas["startDay"] = $startDay;
	}

	public function getStartDay(){
	  return $this->startDay;
	}

                        	                   			private $endDay;
    	                        
	public function setEndDay($endDay){
		$this->endDay = $endDay;
         $this->apiParas["endDay"] = $endDay;
	}

	public function getEndDay(){
	  return $this->endDay;
	}

                        	                   			private $dimension;
    	                        
	public function setDimension($dimension){
		$this->dimension = $dimension;
         $this->apiParas["dimension"] = $dimension;
	}

	public function getDimension(){
	  return $this->dimension;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $id;
                              public function setId($id ){
                 $this->id=$id;
                 $this->apiParas["id"] = $id;
              }

              public function getId(){
              	return $this->id;
              }
                                                                                                                                                                                                                                                                                                                                              private $putType;
                              public function setPutType($putType ){
                 $this->putType=$putType;
                 $this->apiParas["putType"] = $putType;
              }

              public function getPutType(){
              	return $this->putType;
              }
                                                                                                                                                                                                                                                                                                                                              private $platform;
                              public function setPlatform($platform ){
                 $this->platform=$platform;
                 $this->apiParas["platform"] = $platform;
              }

              public function getPlatform(){
              	return $this->platform;
              }
                                                                                                                                        	                                                    	}





        
 

