<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class CompController extends Controller {
    public function index(){
        $this->display();
	}
}