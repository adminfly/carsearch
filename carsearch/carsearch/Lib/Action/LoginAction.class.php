<?php
class LoginAction extends Action{

    //用户登录
    public function login($username,$password){
    	$condition['username'] = $username;
    	$condition['password'] = $password;
    	
    	
    	
    	$result =  M('user') ->where($condition)->field('username')->select();
    	echo M('user')->getLastSql();
    	$username = $result['username'];
//    	if ($username){
    		$this->ajaxReturn($username);
//    	}else {
//    		$this->ajaxReturn(array('result'=>'fail'));
//    	}
    }
    
	private function getReturnData($username){
			//查询用户头像
			$condition = array(
				'username' => $username,
			);
			$photoResult = M('userinfo') -> where($condition)->field('picture') -> select();
			if($photoResult == null){
				$photoResult = '';
			}else{
				$photoResult = $photoResult[0]['picture'];
			}
			
			//查询用户余额
			$userinfoResult = M('userinfo') -> where("username = '$username'")->field('ZJDQYE') -> select();

			if($userinfoResult[0]['ZJDQYE'] == null){
				$ZJDQYE = '0';
			}else{
				$ZJDQYE = $userinfoResult[0]['ZJDQYE'];
			}
			
			//查询用户查询数量
			$userinfoResult = M('userinfo') -> where("username = '$username'")->field('inquire') -> select();

			if($userinfoResult[0]['inquire'] == null){
				$inquire = '0';
			}else{
				$inquire = $userinfoResult[0]['inquire'];
			}
			
			//更新用户最后登录时间
			$data = array(
				'lastlogin' => date('Y-m-d H:i:s',time())
			);
			
			 M('user')->data($data)->where("username = '$username'")->save();
			$this->ajaxReturn(array('result'=>'success','username'=>$username,'headImg'=>$photoResult,'ZJDQYE'=>$ZJDQYE,'inquire'=>$inquire));
	}


}