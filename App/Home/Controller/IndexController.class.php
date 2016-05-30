<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class IndexController extends Controller {
    public function index(){
		$map['ol'] = array('neq',0);
		$goods = M('Goods')->order('ol desc') ->where($map)->limit(7)->select();
		$img = M('Img')->order('ol desc')-> where($map) -> limit(5)->select();
		$list = M('News')->order('time desc')->limit(6)->select();
		$this->assign('goods',$goods);
		$this->assign('list',$list);
		$this->assign('img',$img);
        $this->display();
	}
}