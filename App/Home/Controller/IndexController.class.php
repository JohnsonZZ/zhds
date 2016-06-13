<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class IndexController extends Controller {
    public function index(){
		$map['ol'] = array('neq',0);
		$goods = M('Goods')->order('ol asc') ->where($map)->limit(4)->select();
		$this->assign('goods',$goods);
        $this->display();
	}
}