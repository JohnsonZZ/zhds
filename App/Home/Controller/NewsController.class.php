<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
		$list = M('News')->order('time desc')->select();
		$this->assign('list',$list);
        $this->display();
	}
	public function article(){
		$data['id'] = I('get.theme');
		$list = M('News')->where($data)->find();
		$this->assign($list);
		$this->display();
	}
}