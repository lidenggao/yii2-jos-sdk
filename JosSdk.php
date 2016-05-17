<?php
/**
 * ==============================================
 * Copy right 2015-2016
 * ----------------------------------------------
 * This is not a free software, without any authorization is not allowed to use and spread.
 * ==============================================
 * @param unknowtype
 * @return return_type
 * @author: CoLee
 */
namespace colee\jd;
require_once(dirname(__FILE__)."/jos-autoloader.php");

use yii\base\Component;
class JosSdk extends Component
{
    public $appKey;
    public $appSecret;
    private $_client;

    public function init()
    {
        $c = new \JdClient();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $c->accessToken = "3d951daf-dc60-4808-929c-c578b2587124";
        $c->serverUrl = "https://api.jd.com/routerjson";
        $this->_client = $c;
    }
    
    /**
     * 获取单条推广代码
     * @see https://jos.jd.com/api/detail.htm?apiName=jingdong.service.promotion.getcode&id=629
     */
    public function servicePromotionGetcode()
    {
        $req = new \ServicePromotionGetcodeRequest();
        
        $req->setPromotionType( 123 );
        $req->setMaterialId( "jingdong" );
        $req->setUnionId( 1000037912 );
        $req->setSubUnionId( "15110249233" );
        $req->setSiteSize( "jingdong" );
        $req->setSiteId( "jingdong" );
        $req->setChannel( "jingdong" );
        $req->setWebId( "413502023" );
        $req->setExtendId( "jingdong" );
        $req->setExt1( "jingdong" );
        
        $resp = $this->_client->execute($req, $this->_client->accessToken);
        var_dump($resp);exit;
    }
    
    /**
     * 原SDK的方法支持
     * @see \yii\base\Component::__call()
     */
    public function __call($method_name, $args)
    {
        return call_user_func_array([$this->_client, $method_name],$args);
    }
}