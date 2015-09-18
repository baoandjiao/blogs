<?php
	// require('./test.php'); 
	// echo MOGONAME;
	// var_dump($MEMCACHE_CONFIG);
	// $a = '1111';
	// $b = '111122222';
	// $c = str_replace($a,'',$b);
	// echo $c;
	//$a = $_SERVER['SERVER_NAME']."/ishop/upload/";
	//$head_img_thumb = 'localhost/ishop/upload/images/head/head_thumb_img/1234567.jpg';
	//$head_thumb = str_replace($a,'',$head_img_thumb);
	//echo $head_thumb;
	//$head_original = trim(str_replace($arr,'',$head_img_original),'/');
	//var_dump($_SERVER);
	//$arr  = ['a'=>1,'b'=>2,'c'=>3];
	//$obj = new stdClass();
	//$obj -> name = 'aaaaa';
	//var_dump($obj);
	//phpinfo();
	// $arr=array("name"=>"chjl","sex"=>"boy","age"=>"22");
	// $sum=count($arr);
	// for($i=0 ; $i < $sum ;$i++){
	// echo key($arr).'=>'.current($arr).'<br/>';
	// next($arr);
	// }
	// $str = "qqqqqqqqqqqwertyuiopasdfghjl";
	// $pattern = '/(!q)/';
	// preg_match($pattern,$str,$match);
	// var_dump($match);
	//header("HTTP/1.1 404 Not Found");die;
	//echo getmypid();
	
	//echo microtime();
//	$arr = ['1','2',3,4,5,6,7];
	//echo end($arr);
	
	
	
	
	
	//$size = getimagesize("./1.jpg");
	//var_dump($size);
	//$arr = array('100'=>array(432,234,124),'200'=>array(123,234));
	//$arr = ['1'=>1,'2'=>2];
	//$str = '[{"goods_id":1,"sku_id":2},{"goods_id":3,"sku_id":4}]';
	// $str = 1231241;
	// if(filter_var($str, FILTER_VALIDATE_INT)){
		// echo 123;
	// }
	//$str = "213212321";
	//echo (int)$str;
	// $arr = json_decode($str);var_dump($arr);die;
	// foreach($arr as $v){
		// if(is_object($v)){
			// echo 2;
		// }
	// }
	//var_dump($_SERVER);
	//$arr = array(''=>'1',2=>"2");
	//var_dump($arr);
	// //echo '<meta charset="utf-8">';
	// //$string  = '{"code":"D3_8700_0000","action":"prepay","title":"缴费 - 哈纳斯燃气缴费","form":[{"type":"hidden","name":"amount","value":"447.81"},{"type":"string","label":"用户姓名","value":"薛慧东"},{"type":"string","label":"地址","value":"金凤区正源北街碧水蓝天二期029号楼2单元9层001号"},{"type":"string","label":"用户类型","value":"居民户"},{"type":"string","label":"上期结余(元)","value":"000000000000"},{"type":"string","label":"应缴金额(元)","value":"447.81"},{"type":"multibillstring","label":"账单明细","options":[{"amount":"44781","detail":[{"value":"44781","label":"欠费金额(元)"},{"value":"20110218","label":"抄表期间"},{"value":"37","label":"气量（方）"},{"value":"51.8","label":"气费"},{"value":"396.01","label":"滞纳金(元)"}],"label":"20110218欠费金额44781元"}]}]}';
	// $string = file_get_contents('./a.txt');
	// //echo $string;die;
	// //$str = "'".$string."'";
	// //echo $str;die;
	// $string = iconv("GBK","utf-8",$string);
	// //$str = urldecode($string);
	// $arr = json_decode($string,true);
	// var_dump($arr);
	// 
	 // $arr = ['order_id'=>1223,"name"=>"jinbao","sex"=>"男","age"=>0];
	 // $res = array_filter($arr);
	 // var_dump($res);
	// $res = ['order_id'=>12,"name"=>"xuejiao","age"=>18];
	// $row = array_intersect_key($arr,$res);
	// //var_dump($row);
	// foreach($arr as $k => $v){
		// if(1==1){
			// continue;
		// }
		// var_dump($v);
	// }

	// for ($i = 0; $i < 5; ++$i) {
      // if ($i == 2)
          // continue;
      // print "$i\n";
  // }
  // $arr = ['order_id'=>1223,"name"=>"jinbao","sex"=>"男","age"=>0];
  // array_shift($arr);
  // array_unshift($arr,22222);
  // var_dump($arr);
  // $rule_callback = array('ApiValidator', 'checkRequired');
  // if(!is_callable($rule_callback)){
	  // echo 123;
  // }
  // class demo{
	  // public static function getList(&$b=''){
		// $arr = ['order_id'=>1223,"name"=>"jinbao","sex"=>"男","age"=>0];
		// $b = $arr['order_id'];
	  // }
	  // public function getDemo(){
		// self::getList($b);
		// echo $b;
	  // }
  // }
  
  // $a = new demo();
  // $a -> getDemo();
// function __autoload($class) {
// }

// function my_loader() {
// }

// function your_loader() {
// }

// var_dump ( spl_autoload_functions () );
// echo '<br/>';

// spl_autoload_register ( 'my_loader' );
 // spl_autoload_register ( 'your_loader' );

 // var_dump ( spl_autoload_functions () );
 
 
  // function __autoload($className){
	  // $fileName = $className.'.php';
	  // $filePatha = './'.$fileName;
	  // $filePathb = '../'.$fileName;
	  // if(file_exists($filePatha)){
		  // include_once($filePatha);
	  // }
	  // if(file_exists($filePathb)){
		  // include_once($filePathb);
	  // }
	// }
  // function aa($classNamea){
	  // $fileNamea = './'.$classNamea.'.php';
	   // require($fileNamea);
  // }
  // function bb($classNameb){
	   // $fileNameb = '../'.$classNameb.'.php';
	   // require($fileNameb);
   // }
	 // spl_autoload_register("aa");
     // spl_autoload_register("bb");
 
  // var_dump (spl_autoload_functions ());
  // $a = new test1();
  // $b = new test2();
 // $str = '{"detail":{"OrderId":"114331522119300001","OrderType":"O","UserId":"10000106809","Sum":"10","CreateTime":"20150601175011","State":"PP","PayWay":"OP","PayState":"SP","DeliverWay":"ED","TimeoutTime":"20150730155050","ReturnOrderNum":0,"RefundOrderNum":0,"UserName":"15901038085","InvoiceInfo":{"InvoiceType":"1","Title":"Title_test","Memo":"Title_Memo_test"},"DeliveryInfo":{"Consignee":"Consignee_test","CredentialsNo":"110101199301016128","AreaId":"659004","Add":"beijing","Postcode":"102100","Mobile":"15901038607","Tel":"010-81181111","Email":"test@sina.com","PreferTime":"DY"},"OrderItems":[{"OrderItem":{"GoodsType":"70000","GoodsId":"1005258","GoodsName":"小黑2A-matao","ModelId":"1003119","ThirdPartyId":"88776655","SaleType":"NL","UnitPrice":"2","Quantity":"1","ListPrice":"5","Price":"1","ProvinceId":"100","CityId":"100","ImgId":"tq7byf98qysnbj74","Contract":{"ContractId":"1005712","ContractName":"测试合约当24个月","Desc":"Desc_test","ModelId":"1003544","PayPrice":"1999","GoodsPrice":"1888","ReturnTotal":"1388","ReturnMonth":"288","ReturnLast":"688","MiniCharge":"188","CountMonth":"36","Type":"1","EffectTime":"1 ","Number":"15901038085","Name":"name","BossId":"BossId","GroupBossId":"groupBossId"},"MerchantId":1000049}}],"IsWithActivity":1,"ActivityItems":[{"Id":"114331522113800000","Amount":"98","OrderId":"114331522119300001","SkuId":"1003119","Type":"3","ActionType":"A004","CouponNum":"10000025600001100000912","Description":"Description_test","MobileNum":"13811627200"}],"PromoItems":[{"PromoType":"1","PromoId":"123","SaleId":"111","DetailId":"123","SnapshotId":"123","SkuId":"1009402","OrderId":"114331522119300001","PointsSingle":"1000","PointsTotal":"1500","ScoreType":"2","MobileNum":"15901038080","Description":"test_type_3","ActionType":"999","PackageId":"1234567890","PackageName":"PackageName"},{"PromoType":"3","PromoId":"12366","SaleId":"111","DetailId":"123","SnapshotId":"123","SkuId":"1009402","OrderId":"114331522119300001","PromoPrice":"1000","RetailPrice":"1500","ScoreType":"1","MobileNum":"15901038080","Description":"test_type_3","ChooseType":"110","ChooseRelation":"ChooseRelation"}],"CouponChannel":10}}';


// $arr  = json_decode($str,true);
// var_dump($arr);
 
 //error_log('aaaaa',3,'./jinbao.log');
 
// $http = 'http://10.10.52.19:8080/slfs/services/RealTimeChargeServiceImpl?wsdl';
 // $http = 'https://openapi.shop.10086.cn/order/getDetail.json';
 // $arr = parse_url($http);
 // //$arr = pathinfo($http);
 //$str = 'timestamp=20150603185400&appkey=cacd270273f0ea7399a944d8eb5f3b53&ver=1.0&order_id=114321891963300057&sig=cd2295a24f0556924d49775c5434be8b{"detail":{"OrderId":"114333285255200071","OrderType":"O","UserId":"1004252731","Freight":"0","Sum":"100","CreateTime":"20150603184845","State":"PP","PayWay":"OP","PayState":"SP","DeliverWay":"ED","TimeoutTime":"20150604184845","ReturnOrderNum":0,"RefundOrderNum":0,"UserName":"18211045141","DeliveryInfo":{"Consignee":"刘进宝","AreaId":"110114","Add":"北京北京市昌平区北京市昌平区沙河镇松兰堡村福和公寓2059室","Postcode":"102200","Mobile":"18211045141","PreferTime":"NL"},"OrderItems":[{"OrderItem":{"GoodsType":"70000","GoodsId":"1010841","GoodsName":"427限时购-www","GoodsDetailUrl":"http://mall.178.139.com/goods/100_100_1010841_1026652.html","ModelId":"1026652","ThirdPartyId":"1","SaleType":"NL","UnitPrice":"100","Quantity":"1","ListPrice":"100","Price":"100","ProvinceId":"100","CityId":"100","ImgId":"tq7kpkjgkr6v5ebjs","ModelProps":[{"ModelProp":{"PropId":"229","PropName":"黄色","PropValue":"267"}},{"ModelProp":{"PropId":"258","PropName":"8G","PropValue":"296"}}],"MerchantId":1000064,"MerchantName":"北京移动","MerchantUrl":"http://mall.178.139.com/mall_100_100.html"}}],"IsWithActivity":0,"CouponChannel":0}}';
 // $str = 'appkey=199f1e41e8601ec8b822c85ff8f18e8d&merchant_id=1000063&notice_type=1&order_id=114097955992500374&timestamp=20150603185347&ver=1.0&sig=7d1458fa5647ddeb802552c9ae280847'; 
 // $str = 'timestamp=20150604160300&appkey=cacd270273f0ea7399a944d8eb5f3b53&ver=1.0&order_id=114321891963300057&sig=748d704dc9e91b1007076213a9b9fc37timestamp=20150604160300&appkey=cacd270273f0ea7399a944d8eb5f3b53&ver=1.0&order_id=114321891963300057&sig=748d704dc9e91b1007076213a9b9fc37';
  // $arr = explode('&',$str);
  // foreach ($arr as $value) {
	  // $a = explode('=',$value);
	 // $result[$a[0]] = $a[1];
 // }
 // // $arr = parse_url($http);
  // var_dump($result);
//$str = '{"detail":{"OrderId":"114334000102700022","OrderType":"O","UserId":"1004252731","Freight":"0","Sum":"1","CreateTime":"20150604144010","State":"PP","PayWay":"OP","PayState":"SP","DeliverWay":"ED","TimeoutTime":"20150605144010","ReturnOrderNum":0,"RefundOrderNum":0,"UserName":"18211045141","ModifyTime":"20150604144010","DeliveryInfo":{"Consignee":"刘进宝","AreaId":"110114","Add":"北京北京市昌平区北京市昌平区沙河镇松兰堡村福和公寓2059室","Postcode":"102200","Mobile":"18211045141","PreferTime":"NL"},"OrderItems":[{"OrderItem":{"GoodsType":"70000","GoodsId":"1008839","GoodsName":"测试1701","GoodsDetailUrl":"http://mall.178.139.com/goods/100_100_1008839_1017802.html","ModelId":"1017802","ThirdPartyId":null,"SaleType":"NL","UnitPrice":"1","Quantity":"1","ListPrice":"1","Price":"1","ProvinceId":"100","CityId":"100","ImgId":"tq7kpvck6p4f7r7cf","ModelProps":[{"ModelProp":{"PropId":"229","PropName":"蓝","PropValue":"268"}},{"ModelProp":{"PropId":"258","PropName":"16G","PropValue":"297"}}],"MerchantId":1000064,"MerchantName":"北京移动","MerchantUrl":"http://mall.178.139.com/mall_100_100.html"}}],"IsWithActivity":0,"CouponChannel":0},"appkey":98678b849d7290404aee6b97f5ca24aa}';
//$str = '{"detail":{"OrderId":"114334019611700003","OrderType":"O","UserId":"1004252731","Freight":"0","Sum":"1","CreateTime":"20150604151241","State":"PP","PayWay":"OP","PayState":"SP","DeliverWay":"ED","TimeoutTime":"20150605151241","ReturnOrderNum":0,"RefundOrderNum":0,"UserName":"18211045141","ModifyTime":"20150604151241","DeliveryInfo":{"Consignee":"刘进宝","AreaId":"110114","Add":"北京北京市昌平区北京市昌平区沙河镇松兰堡村福和公寓2059室","Postcode":"102200","Mobile":"18211045141","PreferTime":"NL"},"OrderItems":[{"OrderItem":{"GoodsType":"70000","GoodsId":"1008839","GoodsName":"测试1701","GoodsDetailUrl":"http://mall.178.139.com/goods/100_100_1008839_1017802.html","ModelId":"1017802","ThirdPartyId":null,"SaleType":"NL","UnitPrice":"1","Quantity":"1","ListPrice":"1","Price":"1","ProvinceId":"100","CityId":"100","ImgId":"tq7kpvck6p4f7r7cf","ModelProps":[{"ModelProp":{"PropId":"229","PropName":"蓝","PropValue":"268"}},{"ModelProp":{"PropId":"258","PropName":"16G","PropValue":"297"}}],"MerchantId":1000064,"MerchantName":"北京移动","MerchantUrl":"http://mall.178.139.com/mall_100_100.html"}}],"IsWithActivity":0,"CouponChannel":0},"appkey":"98678b849d7290404aee6b97f5ca24aa"}{"detail":{"OrderId":"114334019611700003","OrderType":"O","UserId":"1004252731","Freight":"0","Sum":"1","CreateTime":"20150604151241","State":"PP","PayWay":"OP","PayState":"SP","DeliverWay":"ED","TimeoutTime":"20150605151241","ReturnOrderNum":0,"RefundOrderNum":0,"UserName":"18211045141","ModifyTime":"20150604151241","DeliveryInfo":{"Consignee":"刘进宝","AreaId":"110114","Add":"北京北京市昌平区北京市昌平区沙河镇松兰堡村福和公寓2059室","Postcode":"102200","Mobile":"18211045141","PreferTime":"NL"},"OrderItems":[{"OrderItem":{"GoodsType":"70000","GoodsId":"1008839","GoodsName":"测试1701","GoodsDetailUrl":"http://mall.178.139.com/goods/100_100_1008839_1017802.html","ModelId":"1017802","ThirdPartyId":null,"SaleType":"NL","UnitPrice":"1","Quantity":"1","ListPrice":"1","Price":"1","ProvinceId":"100","CityId":"100","ImgId":"tq7kpvck6p4f7r7cf","ModelProps":[{"ModelProp":{"PropId":"229","PropName":"蓝","PropValue":"268"}},{"ModelProp":{"PropId":"258","PropName":"16G","PropValue":"297"}}],"MerchantId":1000064,"MerchantName":"北京移动","MerchantUrl":"http://mall.178.139.com/mall_100_100.html"}}],"IsWithActivity":0,"CouponChannel":0},"appkey":"98678b849d7290404aee6b97f5ca24aa"}{"detail":{"OrderId":"114334019611700003","OrderType":"O","UserId":"1004252731","Freight":"0","Sum":"1","CreateTime":"20150604151241","State":"PP","PayWay":"OP","PayState":"SP","DeliverWay":"ED","TimeoutTime":"20150605151241","ReturnOrderNum":0,"RefundOrderNum":0,"UserName":"18211045141","ModifyTime":"20150604151241","DeliveryInfo":{"Consignee":"刘进宝","AreaId":"110114","Add":"北京北京市昌平区北京市昌平区沙河镇松兰堡村福和公寓2059室","Postcode":"102200","Mobile":"18211045141","PreferTime":"NL"},"OrderItems":[{"OrderItem":{"GoodsType":"70000","GoodsId":"1008839","GoodsName":"测试1701","GoodsDetailUrl":"http://mall.178.139.com/goods/100_100_1008839_1017802.html","ModelId":"1017802","ThirdPartyId":null,"SaleType":"NL","UnitPrice":"1","Quantity":"1","ListPrice":"1","Price":"1","ProvinceId":"100","CityId":"100","ImgId":"tq7kpvck6p4f7r7cf","ModelProps":[{"ModelProp":{"PropId":"229","PropName":"蓝","PropValue":"268"}},{"ModelProp":{"PropId":"258","PropName":"16G","PropValue":"297"}}],"MerchantId":1000064,"MerchantName":"北京移动","MerchantUrl":"http://mall.178.139.com/mall_100_100.html"}}],"IsWithActivity":0,"CouponChannel":0},"appkey":"98678b849d7290404aee6b97f5ca24aa"}';
 //$str = '{"detail":{"OrderId":"114334025924900012","OrderType":"O","UserId":"1004252731","Freight":"0","Sum":"1","CreateTime":"20150604152312","State":"PP","PayWay":"OP","PayState":"SP","DeliverWay":"ED","TimeoutTime":"20150605152312","ReturnOrderNum":0,"RefundOrderNum":0,"UserName":"18211045141","ModifyTime":"20150604152312","DeliveryInfo":{"Consignee":"刘进宝","AreaId":"110114","Add":"北京北京市昌平区北京市昌平区沙河镇松兰堡村福和公寓2059室","Postcode":"102200","Mobile":"18211045141","PreferTime":"NL"},"OrderItems":[{"OrderItem":{"GoodsType":"70000","GoodsId":"1008839","GoodsName":"测试1701","GoodsDetailUrl":"http://mall.178.139.com/goods/100_100_1008839_1017802.html","ModelId":"1017802","ThirdPartyId":null,"SaleType":"NL","UnitPrice":"1","Quantity":"1","ListPrice":"1","Price":"1","ProvinceId":"100","CityId":"100","ImgId":"tq7kpvck6p4f7r7cf","ModelProps":[{"ModelProp":{"PropId":"229","PropName":"蓝","PropValue":"268"}},{"ModelProp":{"PropId":"258","PropName":"16G","PropValue":"297"}}],"MerchantId":1000064,"MerchantName":"北京移动","MerchantUrl":"http://mall.178.139.com/mall_100_100.html"}}],"IsWithActivity":0,"CouponChannel":0},"appkey":"98678b849d7290404aee6b97f5ca24aa"}';
// $arr = json_decode($str,true);
// var_dump($arr['detail']['OrderItems'][0]['OrderItem']['MerchantId']);
// $str = '{"status":"0","message":"Success"}';
//var_dump(json_decode($str,true));
// $a = true;
// $b= true;
// $c = false;
// if($a && ($b || $c)){
	// echo 123;
// }else{
	// echo 23
  // $arr= [1,'0',0,6,9,3,null,'',4];
  // $arr = array_filter($arr);
  // var_dump($arr);
 //$str = '{"detail":{"OrderId":"114337436496000009","OrderType":"O","UserId":"1004252731","Freight":"0","Sum":"1","CreateTime":"20150608140729","State":"PP","PayWay":"OP","PayState":"SP","DeliverWay":"ED","TimeoutTime":"20150609140729","ReturnOrderNum":0,"RefundOrderNum":0,"UserName":"18211045141","ModifyTime":"20150608140729","DeliveryInfo":{"Consignee":"刘进宝","AreaId":"110114","Add":"北京北京市昌平区北京市昌平区沙河镇松兰堡村福和公寓2059室","Postcode":"102200","Mobile":"18211045141","PreferTime":"NL"},"OrderItems":[{"OrderItem":{"GoodsType":"70000","GoodsId":"1010397","GoodsName":"大神X7","GoodsDetailUrl":"http://mall.178.139.com/goods/210_210_1010397_1026201.html","ModelId":"1026201","ThirdPartyId":"654321","SaleType":"NL","UnitPrice":"1","Quantity":"1","ListPrice":"1","Price":"1","ProvinceId":"210","CityId":"210","ImgId":"tqzyjpjx6pfnjrcp","ModelProps":[{"ModelProp":{"PropId":"229","PropName":"黄色","PropValue":"267"}},{"ModelProp":{"PropId":"258","PropName":"8G","PropValue":"296"}}],"MerchantId":1000090,"MerchantName":"中移在线服务有限公司","MerchantUrl":"http://mall.178.139.com/mall_210_210.html"}}],"IsWithActivity":0,"CouponChannel":0},"appkey":"98678b849d7290404aee6b97f5ca24aa"}';
// //$str = '12131231';
// //$arr = ['1',2,4,'sasa'];
// if(!is_array(json_decode($str,true))){
	// echo 123;
// }else{
	// echo 456;
// }
// $a = true;
// if($a){
	// header("HTTP/1.1 204");
	// echo 567;
// }else{
	// echo 123;
// }
//var_dump(json_decode($str,true));
// $a = 'xxoo';
// $b = $a?:[];
// print_r([[]]);
//var_dump(getallheaders());

// $header=get_headers("http://localhost/test/demo.php");
// var_dump($header);

// $str = "刘进宝xxooooliujinbao1131313";
// $num  = mb_strlen($str,"utf8");
// while(!false){
	// @$i++;
	// if($i>5){
		// echo 123;
		// return false;
	// }
// }

// function aa(){
	// $a = true;
	// if(!$a){
		// return 123;
	// }
	// return 345;
// }
// echo  aa();

// $a = false;
// if(Empty($a)){
	// echo 123;
// }
 // $str = "appkey=d136c0417a7237b471d5108a69654074&order_id=314158493341526156&timestamp=20150615143352&ver=1.0&sig=8c5e585bc2037bc9c6f9b7f8d07fb799appkey=d136c0417a7237b471d5108a69654074&order_id=314158493341526156&timestamp=20150615143352&ver=1.0&sig=8c5e585bc2037bc9c6f9b7f8d07fb799";
  // $str = "2131231";
  // if(json_decode($str,true)){
	  // echo 123;
  // }else{
	  // echo 234;
  // }
// $pattern = '/[\\/><\'"&#]{1}/';
// //$pattern = '/abc/';
// $string  = '><"';
// preg_match_all($pattern,$string,$matchs);
// var_dump($matchs);

// set_time_limit(0);
// ob_start();
// echo str_repeat(' ',4000).'<br/>';
// ob_flush();
// flush();
// $i = 0;
// while(true){
	  // echo $i++.'<br/>';
	  // ob_flush();
	  // flush();
	  // sleep(1);
// }
// set_time_limit(0);
// while(true){
	// echo '123'.'<br/>';
	// sleep(1);
// }
// echo "<meta charset='utf-8'>";
// $arr = ['name'=>'刘进宝','sex'=>'qqqq','age'=>123,'lams'=>'123'];
// $str = '';
// foreach($arr as $key => $value){
	// $str .= "{$key}={$value}&";
// }
//parse_str($newstr,$array);
// $str = substr($str,0,strlen($str)-1);
// var_dump($str);

/*$arr = ['name'=>'刘进宝','sex'=>'qqqq','age'=>123,'lams'=>'123'];
$str = http_build_query($arr);
var_dump($str);*/

/*$str = '刘进宝';
$str = urldecode($str);
var_dump($str);*/

// $a = 10.0102;
// $b = (int)$a;
// echo $b;
// define('XXOO',123);
 // echo XXOO.'456';

// $arr = ['xxoo' => '123','jinbao' => 'shuai'];
// $a = 'xxoo';

// echo $arr[$a];

/*
$a= '1';
$a = '2';
$b = &$a;
$b= '3';
unset($a);
echo $a.'<br/>';
echo $b;

*/
/*$a = '';
if(empty($a)){
	echo 123;
}*/
// function shutdown()
// {
    // // This is our shutdown function, in 
    // // here we can do any last operations
    // // before the script is complete.

    // echo 'Script executed with success', PHP_EOL;
// }

// register_shutdown_function('shutdown');
//var_dump($_SERVER);
// if(true){
	// return;
	// echo 123;
  // function Test()
   // {
   // static $w3sky = 0;
   // echo $w3sky;
   // $w3sky++;
   // }
// Test();
// echo date('Ymd').'<br/>';
// echo strtotime("20150715110000");
// echo time().'<br/>';
// echo microtime(true);

// $str  =  '@%$@^%';
// echo (int)$str;
// $res['data']['city'] = '北京';
// $arr = ['1' => 1,'2' => 2,'3' => 3];
// $res['data']['num'] = $arr;
// var_dump($res);
// $data = null;
// if($data['code'] === 0 || $data['code'] === '0'){
	// echo 123;
// }
// $a = null;
// if(empty($a)){
	// echo 123;
// }

// $info = array('coffee','brown','caffeine');

// // 列出所有变量
// list($drink, $color, $power) = $info;
// echo "$drink is $color and $power makes it special.\n";
// function demo($a,&$b){
    // global $a;
	// $b=6;
// }
// demo(1,$b);

// echo $a;
// echo $b;
// $a= 'cc';
// $arr = ['xx'=>'xx','00'=>'00','cc'=>'cc'];

// echo $arr[$a];
// $arr = array('111');
// if(empty($arr)){
	// echo 123;
// }else{
	// echo 3333;
// }
// function shutdown()
// {
    // // This is our shutdown function, in 
    // // here we can do any last operations
    // // before the script is complete.

    // echo 'Script executed with success', PHP_EOL;
// }

// register_shutdown_function('shutdown');


// error_log(var_export($_POST,true),3,'./jinbao.log');
// $code = 0;
// $msg = 'xxoo';
// exit;
// class aa{
	// private $a = null;
	
	// public function __construct($b){
		// $this -> a = $b;
	// }
	// public function aa(){
		// return $this -> a;
	// }
	
// }

// class bb{
	// public function __construct(){
		
	// }
	// public function bb(){
		// $flag = cc::cc(true) -> aa();
		// if($flag){
			// echo '567';
		// }else{
			// echo 'xxoo';
		// }
	// }
// }
// class dd{
	// public function dd(){
		// $flag = cc::cc('') -> aa();
		// if($flag){
			// echo '567';
		// }else{
			// echo 'xxoo';
		// }
	// }
// }
 // class cc{
	 // public function __construct(){
		
	 // }
	 // // public static function getObj(){
		 // // if(!is_null(self::$obj)){
			 // // return self::$obj;
		 // // }else{
			 // // self::cc();
		 // // }
	 // // }
	 // public static function cc($c){
		// static $instances = [];
		// if(isset($instances[$c])){
			// return $instances[$c];
			
		// }
		// $obj = new aa($c);
		// $instances[$c] = $obj;
		// return $obj;
	// }
 // }
// $b = new bb();

// $b -> bb();

/*class gg{
	public function gg(){
		
		 if(1){
			throw new Exception('xxoo',443);
		 }
	}
}
class ff{
	public function ff(){
		$gg = new gg();
		$gg -> gg();
	}
}



class aa{
	public function __construct(){
		
	}
	
	
	public function aa(){
		$a = new ff();
		$a -> ff();
	}
}
try{
	$a = new aa();
	$a ->aa();
}catch(Exception $e){
	echo $e -> getCode();
	echo $e -> getMessage();
}*/
/*$arr = array("net" => array(
                                       "find" => array("marks"=>"1234","name"=>"lisi"),
                                       "add" => array("marks"=>"12","name"=>"lisi2"),
                                       "up" => array("marks"=>"15","name"=>"lisi3"),
                                       "del" => array("marks"=>"9","name"=>"lisi4")
                               ),
                           "login" => array(
                                      "find" => array("marks"=>"16661","name"=>"lisi5"),
                                      "add" => array("marks"=>"18881","name"=>"lisi6")
                               )
                          );
						  
						  
$v = end($arr['net']);
$k = key($arr['net']);
echo $k;
print_r($v);*/

// $a = [1,2,3,4,5];
// $b= array();
// var_dump(array_merge($a,$b));

// $arr = array(1,array(1,2,3),4,array(1,3,4,array(6,7,8)));
// array_pop($arr);
// var_dump($res);

// $array = array('a','b','c','d','e','f');
// $i = 1;
// foreach($array as $key => $val){
    // if($i>2){
        // echo '已经循环两条了';break;
    // }
    // echo $val;
    // $i++;
// }

// class a{
	// public function aa(array $a){
		// var_dump($a);
	// }
// }
// $aa = new a();

// $aa -> aa(['123']);

 // $qpt = 'Eat to live, but not live to eat'; 
 // echo preg_match_all("/to/", $qpt); 

 //var_dump(dirname($_SERVER['PHP_SELF']));
 
    // $arr = array(5 => 1, 12 => 2,13 => 56 , 'x' => 42); 
    // $arr[] = 56; 
    // $arr["x"] = 42; 
    // echo var_dump($arr);
	
	
    // $x="display"; 
	// function display_result(){
		// echo 123;
	// }
    // ${$x.'_result'} (); 
// class A{ 
    // public function __construct(){ 
        // echo "Class A...<br/>"; 
    // }
// }
// class B extends A{
    // public function __construct(){
		// parent::__construct();
        // echo "Class B...<br/>"; 
    // }
// }
    // new B();

	
/*class demo{
		public $sex = '';
		private $sql = array(
							'name' =>"",
							'people' =>"",
							'sorry' =>""
							);
		public function __call($methodName,$arges){
			if(array_key_exists($methodName,$this ->sql)){
				$this -> sql[$methodName] = $arges[1];
			}else{
				echo "参数出错";
			}
			return $this;
		}
		public function select(){
			echo "{$this -> sql['name']}{$this -> sql['people']}{$this ->sql['sorry']}";
		}
	
	}
	$d = new demo();
	$d -> name('安倍晋三','我') -> people('倭人国','祝愿') -> sorry('认罪','老爸早日康复') ->select();*/
	
	// $str = "LAMP";
    // $str1 = "LAMPBrother";
    // $strc = strcmp($str1,$str);
	// echo $strc;
	//$a = 1;
	
	/* switch($a){
		 case 0:
		 echo 0;
		 case 1:
		 echo 1;
		 case 2:
		 echo 2;
		 break;
		 echo 'xxoo';
		 case 3:
		 echo 3;
	 }*/
	
	// if(true){
		// $a = 123;
	// }
	
	// if(true){
		// $b= 234;
		// if(true){
			// return;
		// }
		// if(true){
			// return;
		// }
	// }
	
/*require_once('../xiaowei/test.php');
$a = new \xiaowei\dad('健康的');
//use  xiaowei\dad;
//$a = xiaowei\dad::eat('shucai');
echo $a -> eat('shucai');exit;
class dad{
	public $name;
	public $health;
	
	public function __construct($health){
		$this -> health = $health;
	}
	public function say(){
		echo '我是'.$this -> health;
	}
}*/
/*$urlinfo = parse_url('http://shop.10086.cn/mall_100_100.html?forcelogin=1&artifact=d81c5e39c61a4a4db6bfd4838574f7df');
var_dump($urlinfo);
define('HOSTNAME','shop.10086.cn');
$exp = '/^(\w+\.)?'.str_replace('.','\\.',HOSTNAME).'$/';
var_dump($exp);	*/
//var_dump(preg_match_all('/\?/','http://shop.10086.cn/ma???ll_100_100.html?forcelogin=1&artifact=d81c5e39c61a4a4db6bfd4838574f7df'));
 /*session_start();

$_SESSION['me'] = 'xxoo';
$_SESSION['user_name'] = 'jinbao';
var_dump($_SESSION);
var_dump(session_id());

var_dump(session_save_path());*/

// $sess  = 'asdadsadsadadadadada';
// $sess = array('xxooooxxxxooooxxooxx');
// var_dump($sess);
/*require('./PHPMailer_v5.0.2/class.phpmailer.php');
$mail = new PHPMailer(); //实例化 
$mail->IsSMTP(); // 启用SMTP 
$mail->Host = "smtp.163.com"; //SMTP服务器 以163邮箱为例子 
$mail->Port = 25;  //邮件发送端口 
$mail->SMTPAuth   = true;  //启用SMTP认证 
 
$mail->CharSet  = "UTF-8"; //字符集 
$mail->Encoding = "base64"; //编码方式 
 
$mail->Username = "helloweba@163.com";  //你的邮箱 
$mail->Password = "xxx";  //你的密码 
$mail->Subject = "你好"; //邮件标题 
 
$mail->From = "helloweba@163.com";  //发件人地址（也就是你的邮箱） 
$mail->FromName = "月光光";  //发件人姓名 
 
$address = "2680250486@qq.com";//收件人email 
$mail->AddAddress($address, "亲");//添加收件人（地址，昵称） 
 
$mail->AddAttachment('./xx.xlsx','我的附件.xls'); // 添加附件,并指定名称 
$mail->IsHTML(true); //支持html格式内容 
$mail->AddEmbeddedImage("logo.jpg", "my-attach", "logo.jpg"); //设置邮件中的图片 
$mail->Body = '你好, <b>朋友</b>! <br/>这是一封来自<a href="http://www.helloweba.com"  
target="_blank">helloweba.com</a>的邮件！<br/> 
<img alt="helloweba" src="cid:my-attach">'; //邮件主体内容 
 
//发送 
if(!$mail->Send()) { 
  echo "Mailer Error: " . $mail->ErrorInfo; 
} else { 
  echo "Message sent!"; 
} */
//var_dump(json_decode("UserInfo":{"UserName":"654991042@qq.com","Province":"","Brand":"","Status":"","NickName":"","AuthUserID":"15091452107940","IdentCode":"","IdentCodeLevel":"","UID":"80093cbf60514d10bea25245616a75d6"},true));

// $checksum = crc32("192.168.1.100:80");
// printf("%u\n", $checksum);
// $array = array('HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR', 'HTTP_CLIENT_IP');
        // foreach ($array as $method) {
            // $true_ip = getenv($method);
        // }
    // var_dump($true_ip);
	
	
	
// $first_token  = strtok('/something', '/');
// $second_token = strtok('/');
// var_dump($first_token, $second_token);

var_dump(getenv('HTTP_CLIENT_IP'));