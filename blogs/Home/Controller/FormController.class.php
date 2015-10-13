<?php
	namespace Home\Controller;
	use Think\Controller;
	class FormController extends Controller{
		
		public function insert(){
			$Form = D('Form');
			if($Form -> create()){
				$result = $Form -> add();
				if($result){
					$this -> success('添加数据成功');
				}else{
					$this -> error('添加数据失败');
				}
			}else{
				$this -> error($Form -> geterror());
			}
		}
	}

	