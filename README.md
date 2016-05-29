# yii2-jos-sdk
------------
## 京东JOS SDK
------------
### 使用方法：
------------
添加配置  
```php
    'components' => [
        'jos'=>[
            'class'=>'colee\jd\jos\JosSdk',
            'appKey'=>'…………',
            'appSecret'=>'…………',
            'redirectUri'=>'http://127.0.0.1:8081/jos/callback'
        ],
    ],
```
使用示例：  
----------
获取登录URL  
```php
$url = \Yii::$app->jos->getLoginUrl('union');
echo Html::a('login', $url,[
    'target'=>'_blank'
]);
```
```php
/**
 * 回调地址
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
public function actionCallback($code, $state=false)
{
    $data = \Yii::$app->jos->getTokenByCode($code, $state);
    var_dump($data);
}
```
```php
//获取单条推广代码
$res = \Yii::$app->jos->execute('jingdong.service.promotion.getcode', [
    'promotionType'=>'7',
    'materialId'=>'http://item.jd.com/1593025426.html',
    'unionId'=>1000000,
    'subUnionId'=>'qq123',
    'siteSize'=>'',
    'siteId'=>'',
    'channel'=>'PC',
    'webId'=>'543453',
    'extendId'=>'自定义ID',
    'ext1'=>'自定义数据',
], '6c7b3131-8a59-49ad-b3c4-ac9384f72d55');
var_dump($res);

// 联盟查询订单
$res = \Yii::$app->jos->execute('jingdong.UnionOrderService.queryOrders', [
    'time'=>'2016051818',
    'pageIndex'=>1,
    'pageSize'=>20,
    'unionId'=>1000000,
], '6c7b3131-8a59-49ad-b3c4-ac9384f72d55');
var_dump($res);

// 查询业绩
$res = \Yii::$app->jos->execute('jingdong.UnionOrderService.queryCommisions', [
    'time'=>'2016051818',
    'pageIndex'=>1,
    'pageSize'=>20,
    'unionId'=>1000000,
], '6c7b3131-8a59-49ad-b3c4-ac9384f72d55');
var_dump($res);
```