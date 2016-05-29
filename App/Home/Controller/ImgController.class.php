<?php
namespace Admin\Controller;
use Think\Controller;
class ImgController extends Controller {
	public function index(){
		$Img = M('Img');
		$count = $Img->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count,8); // 实例化分页类 传入总记录数和每页显示的记录数(10)
		$img = $Img->order('ol desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$Page->setConfig('prev', '<');
		$Page->setConfig('next', '>');
		$Page->setConfig('header','');
		$show = $Page->show(); // 分页显示输出
		$this->assign('page', $show); // 赋值分页输出
		$this->assign('img',$img);
		$this->display();	
	}
	public function add(){
		$this->display();
    }
	public function edit(){
		$data['id'] = I('get.id');
		$Img = M('Img');
		$img = $Img->where($data)->find();
		$this->assign('img',$img);
		$this->display();
	}
	
	
	
	
	
}


?>