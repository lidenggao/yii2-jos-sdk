# yii2-jos-sdk
====
京东JOS SDK
----
### 使用方法：
------------
添加配置  
```php
    'components' => [
        'jos'=>[
            'class'=>'colee\jd\JosSdk',
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