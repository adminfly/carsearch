<?php
class RegistAction extends Action{
	//用手机号注册
	public function regist(){
		$data = array(
			'username' => I('username'),
			'password' => I('password'),
		);
		$phone = $data['username'];
		if (M('user')->where("username = '$phone'")->select() == null){
			echo M('user')->getLastSql();
			if(M('user')->data($data)->add() > 0){
				
				$this->ajaxReturn(array('result'=>'success','reason' => 'Registration Successful'));
			}else {
				$this->ajaxReturn(array('result'=>'error','reason' => 'registration failed'));
			}
			echo M('user')->getLastSql();
		}else {
			$this->ajaxReturn(array('result'=>'error','reason' => 'Mobile phone number has been registered'));
		}	
	}
}