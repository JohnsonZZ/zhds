<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class ServiceController extends Controller {
    public function index(){
		$sort = I('get.sort');
		$Goods = M('Goods');
		//全部的产品
		$count = $Goods->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count,16); // 实例化分页类 传入总记录数和每页显示的记录数(10)
		$list = $Goods->order('ol desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		
		//当有sort时
		if($sort)
		{
			$map['sort'] = $sort;
			$count = $Goods -> where($map) -> count();
			$list = $Goods -> order('ol desc') -> where($map) -> limit($Page->firstRow . ',' . $Page->listRows)->select();	
			
		}
		else{
			$count = $Goods->count(); // 查询满足要求的总记录数
			$Page = new \Think\Page($count,16); // 实例化分页类 传入总记录数和每页显示的记录数(10)
			$list = $Goods->order('ol desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		}

		if($sort ==1)
		{
			$sort1 = "手镯";
		}
		else if($sort ==2)
		{
			$sort1 = "戒指";
		}
		else if($sort ==3)
		{
			$sort1 = "套链";
		}
		else if(!$sort)
		{
			$sort1 = "全部产品";
		}
		//公共部分
		$Page->setConfig('prev', '<');
		$Page->setConfig('next', '>');
		$Page->setConfig('header','');
		$show = $Page->show(); // 分页显示输出
		$this->assign('page', $show); // 赋值分页输出
		$this->assign('sort1',$sort1);
		$this->assign('list',$list);
		$this->display();
	}
	public function goods(){
		$data['id'] = I('get.id');
		$list = M('Goods')->where($data)->find();
		$this->assign($list);
        $this->display();
	}
}