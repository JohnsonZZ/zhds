<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$goods = M('Goods')->order('ol desc')->limit(1,7)->select();
		$list = M('News')->order('time desc')->limit(6)->select();
		$this->assign('goods',$goods);
		$this->assign('list',$list);
        $this->display();
	}
}