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

		public function read(){
			/*$Form = M('Form');
			$data = $Form -> find();
			var_dump($data);exit;
			if($data){
				$this -> assign('data',$data);	
			}else{
				$this -> error('数据错误');
			}
			$this -> display();*/
			$a = FormModel::getUser();
			var_dump($a);
		}

		public function edit($id=0){
    		$Form   =   M('Form');
    		$this->assign('vo',$Form->find($id));
    		$this-> display();
 		}
 		public function update(){
   			$Form   =   D('Form');
    		if($Form->create()) {
        		$result =   $Form->save();
        		if($result) {
            		$this->success('操作成功！');
        		}else{
            		$this->error('写入错误！');
        		}
    		}else{
        		$this->error($Form->getError());
    		}
 		}




	}

	