<?php
namespace Home\Controller;
use Think\Controller;
class ServiceController extends Controller {
    public function index(){
		$list = M('Goods')->order('ol asc')->select();
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