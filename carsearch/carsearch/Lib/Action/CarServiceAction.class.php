<?php
class CarServiceAction extends Action{
	//查询汽车保养历史记录
	public function index($username){
		$link = M('car service_history')->where($username)->select();
		$data = array(
			'brand' => $link['brand'],
			'VIN'   => $link['VIN'],
			'service time' => $link['service time'],
			'km' => $link['km'],
			'accident' => $link['engine'],
			'SRS' => $link['SRS'],
			'odometer' => $link['odometer'],
			'raw data' => $link['raw data']
		);
		$this->ajaxReturn($data);
	}
















}