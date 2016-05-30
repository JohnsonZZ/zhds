<?php
namespace Admin\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class LoginController extends Controller {
    public function index(){
		$this->display();
    }
	public function login(){
		$Admin = M('Admin');
		$account = I('post.account');
		$pwd = I('post.pwd');
		$remember = I('post.remember');
		$result = $Admin->where("account = '$account'")->find();
		if($result){
			if($result['pwd'] == sha1($pwd.$result['salt'])){
				if($remember){
					cookie('account',$account);
				}
				session('account',$account);
				addlog("登陆成功");
				$this->redirect('Index/index');
			} else {
				$this->error('密码错误');
			}
		} else {
			$this->error('账号不存在');
		}
	}
	public function quit(){
		session(null);
		cookie(null);
		$this->redirect('index');
	}
}