<?php
/**
 * ==============================================
 * Copy right 2015-2016
 * ----------------------------------------------
 * This is not a free software, without any authorization is not allowed to use and spread.
 * ==============================================
 * 这是基于京东SDK封装的YII2应用包
 * @see https://github.com/colee1985/yii2-jos-sdk/blob/master/README.md
 * @param unknowtype
 * @return return_type
 * @author: CoLee
 */
namespace colee\jd;
require_once(dirname(__FILE__)."/jos-autoloader.php");

use yii\base\Component;
use yii\web\BadRequestHttpException;
class JosSdk extends Component
{
    public $appKey;
    public $appSecret;
    public $redirectUri;
    private $_client;
    private 

    public function init()
    {
        if (empty($this->appKey) || empty($this->appSecret) || empty($this->redirectUri)){
            throw new InvalidParamException('appKey,appSecret,redirectUri不能为空');
        }
        $c = new \JdClient();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $c->serverUrl = "https://api.jd.com/routerjson";
        $this->_client = $c;
    }
    
    /**
     * 获取登录页面的URL
     * @param string $redirect_uri
     * @param string $state
     * @return string
     */
    public function getLoginUrl($state='')
    {
        $params = http_build_query([
            'response_type'=>'code',
            'client_id'=>$this->appKey,
            'redirect_uri'=>$this->redirectUri,
            'state'=>$state,
        ]);
        return 'https://oauth.jd.com/oauth/authorize?'.$params;
    }
    
    /**
     * 通过code获取token
     * @param unknown $code
     * @param string $state
     * @return array eg: {
     *    "access_token": "3d951daf-dc60-4808-929c-c578b2587124",
     *    "code": 0,
     *    "expires_in": 86399,
     *    "refresh_token": "465a34ff-dbd4-4930-a87a-80d327c15d20",
     *    "time": "1463473099215",
     *    "token_type": "bearer",
     *    "uid": "2247093760",
     *    "user_nick": "e家洁trs"
     *  }
     */
    public function getTokenByCode($code, $state='')
    {
        $params = [
            'grant_type'=>'authorization_code',
            'client_id'=>\Yii::$app->jos->appKey,
            'client_secret'=>\Yii::$app->jos->appSecret,
            'redirect_uri'=>$this->redirectUri,
            'code'=>$code,
            'state'=>$state,
        ];
        $url = 'https://auth.360buy.com/oauth/token?'.http_build_query($params);
        $data = file_get_contents($url);
        $data = iconv('GBK', 'UTF-8', $data);
        $data = json_decode($data, true);
        if (empty($data['access_token'])){
            throw new BadRequestHttpException('获取JD ACCESS TOKEN 失败');
        }
        
        return $data;
    }
    
    /**
     * 获取单条推广代码
     * @param string $accessToken eg: '3d951daf-dc60-4808-929c-c578b2587124'
     * @see https://jos.jd.com/api/detail.htm?apiName=jingdong.service.promotion.getcode&id=629
     */
    public function servicePromotionGetcode($accessToken)
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
        
        $resp = $this->_client->execute($req, $accessToken);
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