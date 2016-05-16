<?php
class SkuWriteUpdateSkusRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.sku.write.updateSkus";
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
                                                        		                                    	                        	                        	                                                    	                        	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                        private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                                              private $saleAttrs;
                              public function setSaleAttrs($saleAttrs ){
                 $this->saleAttrs=$saleAttrs;
                 $this->apiParas["saleAttrs"] = $saleAttrs;
              }

              public function getSaleAttrs(){
              	return $this->saleAttrs;
              }
                                                                                                                                                                                                                                                                                                                                              private $skuFeatures;
                              public function setSkuFeatures($skuFeatures ){
                 $this->skuFeatures=$skuFeatures;
                 $this->apiParas["skuFeatures"] = $skuFeatures;
              }

              public function getSkuFeatures(){
              	return $this->skuFeatures;
              }
                                                                                                                                                                                                                                                                                                                                              private $jdPrice;
                              public function setJdPrice($jdPrice ){
                 $this->jdPrice=$jdPrice;
                 $this->apiParas["jdPrice"] = $jdPrice;
              }

              public function getJdPrice(){
              	return $this->jdPrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $outerId;
                              public function setOuterId($outerId ){
                 $this->outerId=$outerId;
                 $this->apiParas["outerId"] = $outerId;
              }

              public function getOuterId(){
              	return $this->outerId;
              }
                                                                                                                                                                                                                                                                                                                                              private $stockNum;
                              public function setStockNum($stockNum ){
                 $this->stockNum=$stockNum;
                 $this->apiParas["stockNum"] = $stockNum;
              }

              public function getStockNum(){
              	return $this->stockNum;
              }
                                                                                                                                                                                                                                                                                                                                              private $barCode;
                              public function setBarCode($barCode ){
                 $this->barCode=$barCode;
                 $this->apiParas["barCode"] = $barCode;
              }

              public function getBarCode(){
              	return $this->barCode;
              }
                                                                                                                }





        
 

