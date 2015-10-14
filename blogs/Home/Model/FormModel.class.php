<?php
	namespace Home\Model;
	use Think\Model;
	class FormModel extends Model{
		//定义自动验证
		protected $_validate = array(
			array('title','require','标题必须'),
			array('content','require','内容必须')
		);
		// 定义自动完成
    	protected $_auto = array(
        	array('create_time','time',1,'function')
        );

        public static function getUser(){
        	$user = M('user');
        	return  $user;
        }
	}