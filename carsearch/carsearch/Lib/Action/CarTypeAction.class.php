<?php
class CarTypeAction extends Action{
	//查车型简单历史记录
	public function index(){
		$data = array(
			'username' => I('username')
		);
		$link = M('car type_history')->where($data)->select();
		if ($link){
			$condition = array(
				'VIN' => $link['VIN'],
			    'vehicle information' => $link['vehicle information'],
				'time' => $link['time']
			);
			$this->ajaxReturn($condition);
		}else {
			$this->ajaxReturn(array('result' => 'error','reason' => '无车型历史记录'));
		}
	}
	//车型详细历史记录
	public function cartype(){
		$condition = array(
			'VIN' => I('VIN')
		);
		$link = M('car type_history')->where($condition)->select();
		$data = array(
			'series'            => $link['series'],
			'type'              => $link['type'],
			'year'              => $link['year'],
			'config'            => $link['config'],
			'manufacturers'     => $link['manufacturers'],
			'model year'        => $link['model year'],
			'displacement'      => $link['displacement'],
			'engine model'      => $link['engine model'],
			'transmission type' => $link['transmission type'],
			'gear number'       => $link['gear number'],
			'effluent standard' => $link['effluent standard'],
			'halt production'   => $link['halt production'],
			'price'             => $link['price'],
			'vehicletype'       => $link['vehicletype'],
			'car door'          => $link['car door'],
			'seat'              => $link['seat'],
			'KM'                => $link['KM'],
			'fueltype'          => $link['fueltype'],
			'AMT'               => $link['AMT']
		);
		$this->ajaxReturn($data);
	}
	//删除用户查车型历史记录
	public function del(){
		$condition = array(
			'username' => I('username'),
			'VIN'    => I('VIN')
		);
		if (M()->where($condition)->delete()){
			$this->ajaxReturn(array('result'=>'success','reason' => '删除成功'));
		}else {
			$this->ajaxReturn(array('result'=>'success','reason' => '删除失败'));
		}
		
	}












}