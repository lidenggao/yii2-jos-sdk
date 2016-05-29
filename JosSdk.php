<?php
/**
 * ==============================================
 * Copy right 2015-2016
 * ----------------------------------------------
 * 这是CoLee封装的YII2京东SDK包
 * ==============================================
 * @see https://github.com/colee1985/yii2-jos-sdk/blob/master/README.md
 * @author: CoLee
 */
namespace colee\jd\jos;

use yii\base\Component;
use yii\web\BadRequestHttpException;
class JosSdk extends Component
{
    public $appKey;
    public $appSecret;
    public $redirectUri;
    
    public $serverUrl = "http://api.jd.com/routerjson";
	public $connectTimeout = 0;
	public $readTimeout = 0;
	public $version = "2.0";
	public $format = "json";
	private $charset_utf8 = "UTF-8";
	private $json_param_key = "360buy_param_json";

    public function init()
    {
        if (empty($this->appKey) || empty($this->appSecret) || empty($this->redirectUri)){
            throw new InvalidParamException('appKey,appSecret,redirectUri不能为空');
        }
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

    //////////////////////// 以下从JD SDK复制出来修改的 //////////////////////////////

	protected function generateSign($params)
	{
		ksort($params);
		$stringToBeSigned = $this->appSecret;
		foreach ($params as $k => $v)
		{
			if("@" != substr($v, 0, 1))
			{
				$stringToBeSigned .= "$k$v";
			}
		}
		unset($k, $v);
		$stringToBeSigned .= $this->appSecret;
		return strtoupper(md5($stringToBeSigned));
	}

	/**
	 * CURL 构造方法
	 * @param unknown $url
	 * @param string $postFields
	 * @throws Exception
	 */
	protected function curl($url, $postFields = null)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FAILONERROR, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		if ($this->readTimeout) {
			curl_setopt($ch, CURLOPT_TIMEOUT, $this->readTimeout);
		}
		if ($this->connectTimeout) {
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
		}
		//https 请求
		if(strlen($url) > 5 && strtolower(substr($url,0,5)) == "https" ) {
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		}

		if (is_array($postFields) && 0 < count($postFields))
		{
			$postBodyString = "";
			$postMultipart = false;
			foreach ($postFields as $k => $v)
			{
				if("@" != substr($v, 0, 1))//判断是不是文件上传
				{
					$postBodyString .= "$k=" . urlencode($v) . "&"; 
				}
				else//文件上传用multipart/form-data，否则用www-form-urlencoded
				{
					$postMultipart = true;
				}
			}
			unset($k, $v);
			curl_setopt($ch, CURLOPT_POST, true);
			if ($postMultipart)
			{
				curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
			}
			else
			{
				curl_setopt($ch, CURLOPT_POSTFIELDS, substr($postBodyString,0,-1));
			}
		}
		$reponse = curl_exec($ch);
		
		if (curl_errno($ch))
		{
			throw new \Exception(curl_error($ch),0);
		}
		else
		{
			$httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			if (200 !== $httpStatusCode)
			{
				throw new \Exception($reponse,$httpStatusCode);
			}
		}
		curl_close($ch);
		return $reponse;
	}
    
	/**
	 * 执行API查询
	 * @param string $apiName 接口名称，如： jingdong.UnionOrderService.queryCommisions
	 * @param array $apiParams  接口参数
	 * @param string $access_token 
	 * @return mixed
	 */
	public function execute($apiName, $apiParams, $access_token = null)
	{
	    $apiParams = json_encode($apiParams);
		//组装系统参数
		$sysParams["app_key"] = $this->appKey;
		$sysParams["v"] = $this->version;
		$sysParams["method"] = trim($apiName);
		$sysParams["timestamp"] = date("Y-m-d H:i:s");
		if (null != $access_token)
		{
			$sysParams["access_token"] = $access_token;
		}

		//获取业务参数
		$sysParams[$this->json_param_key] = $apiParams;

		//签名
		$sysParams["sign"] = $this->generateSign($sysParams);
		//系统参数放入GET请求串
		$requestUrl = $this->serverUrl . "?";
		foreach ($sysParams as $sysParamKey => $sysParamValue)
		{
			$requestUrl .= "$sysParamKey=" . urlencode($sysParamValue) . "&";
		}
		//发起HTTP请求
		try
		{
			$resp = $this->curl($requestUrl, $apiParams);
		}
		catch (Exception $e)
		{
			$result->code = $e->getCode();
			$result->msg = $e->getMessage();
			return $result;
		}

		//解析JD返回结果
		$respWellFormed = false;
		if ("json" == $this->format)
		{
			$respObject = json_decode($resp);
			if (null !== $respObject)
			{
				$respWellFormed = true;
				foreach ($respObject as $propKey => $propValue)
				{
					$respObject = $propValue;
				}
			}
		}
		else if("xml" == $this->format)
		{
			$respObject = @simplexml_load_string($resp);
			if (false !== $respObject)
			{
				$respWellFormed = true;
			}
		}

		return $respObject;
	}
}