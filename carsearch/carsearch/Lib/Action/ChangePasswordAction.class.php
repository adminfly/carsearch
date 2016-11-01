<?php
class ChangePasswordAction extends Action{
	//用户修改密码
	public function index(){
		$data = array(
			'username' => I('username'),
			'password' => I('password')
		);
		$newpwd = array(
			'password' => I('newpwd')
		);
		if (M('user')->where($data)->select()){
			if(M('user') -> where($data)-> save($newpwd)){
				$this->ajaxReturn(array('result' => 'success','reason' => '修改成功'));
			}else {
				$this->ajaxReturn(array('result' => 'error','reason' => '数据库更新失败'));
			}
		}else {
			$this->ajaxReturn(array('result' => 'error','reason' => '无用户数据'));
		}
	}
	//用户手机验证修改密码
	public function cedonum(){
		$data = array(
			'username' => I('username')
		);
		$newpwd = array(
			'password' => I('newpwd2')
		);
		if(M('user') -> where($data)-> save($newpwd)){
				$this->ajaxReturn(array('result' => 'success','reason' => '修改成功'));
		}else {
				$this->ajaxReturn(array('result' => 'error','reason' => '数据库更新失败'));
		}
	}















}