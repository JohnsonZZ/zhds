<?php
namespace Admin\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class ComController extends Controller {
    public function _initialize(){
		if(null !== session('account')||null !== cookie('account')){
			
		}else{
			$this->redirect('Login/index');
		}
    }
}