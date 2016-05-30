<?php
namespace Admin\Controller;
use Admin\Controller\ComController;
header("Content-type:text/html;charset=utf-8");
class AdminController extends ComController {
    public function index(){
		$Admin = M('Admin');
		$count = $Admin->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count,8); // 实例化分页类 传入总记录数和每页显示的记录数(10)
		$list = $Admin->order('id asc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$Page->setConfig('prev', '<');
		$Page->setConfig('next', '>');
		$Page->setConfig('header','');
		$show = $Page->show(); // 分页显示输出
		$this->assign('page', $show); // 赋值分页输出
		$this->assign('list',$list);
		$this->display();
    }
	public function add(){
		$this->display();
    }
	public function edit(){
		$data['id'] = I('get.id');
		$Admin = M('Admin');
		$list = $Admin->where($data)->find();
		$this->assign('list',$list);
		$this->display();
	}
	public function update(){
		$id = I('post.id');
		$data['account'] = I('post.account');
		$data['pwd'] = I('post.pwd');
		$data['salt'] = base64_encode(mcrypt_create_iv(32,MCRYPT_DEV_RANDOM));
		$data['pwd'] = sha1($data['pwd'].$data['salt']);
		$Admin = M('Admin');
		if($id){
			$result = $Admin->where('id ='.$id)->save($data);
			if($result){
				$this->success('修改成功', 'index');
			} else {
				$this->error('修改失败');
			}
		}else{
			$result = $Admin->add($data);
			if($result){
				$this->success('新增成功', 'add');
			} else {
				$this->error('新增失败');
			}
		}
	}
	public function del(){
		$data['id'] = I('get.id');
		$Admin = M('Admin');
		$result = $Admin->where($data)->delete();
		if($result){
			$this->success('删除成功');
		} else {
			$this->error('删除失败');
		}
	}
}