<?php
namespace Admin\Controller;
use Admin\Controller\ComController;
header("Content-type:text/html;charset=utf-8");
class IndexController extends ComController {
    public function index(){
		$list = M('Log')->order('time desc')->select();
		$this->assign('list',$list);
		$this->display();
    }
	
}