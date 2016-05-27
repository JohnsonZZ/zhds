<?php
namespace Admin\Controller;
use Admin\Controller\ComController;
class GoodsController extends ComController {
    public function index(){
		$Goods = M('Goods');
		$count = $Goods->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count,8); // 实例化分页类 传入总记录数和每页显示的记录数(10)
		$list = $Goods->order('ol desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
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
		$Goods = M('Goods');
		$list = $Goods->where($data)->find();
		$this->assign('list',$list);
		$this->display();
	}
	public function update(){
		$id = I('post.id');
		$data['brief'] = I('post.brief');
		$data['content'] = $_POST['content'];
		$data['ol'] = I('post.ol');
		if(!empty($_FILES)){
			$upload = new \Think\Upload();// 实例化上传类
			$upload->subName   =     array('date', 'Ymd');
			$upload->maxSize   =     1048576 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath  =     'Public/upload/image/'; // 设置附件上传根目录
			$upload->replace   =	 true;
			$upload->savePath  =     ''; // 设置附件上传（子）目录
			// 上传文件 
			$info   =   $upload->upload();
			if($info) {
				$data['href'] = $info['photo']['savepath'] . $info['photo']['savename'];
			}else{
				if(empty($id)){
					$data['href'] = 'example/example.jpg';
					$flag = 1;
				}
			}
		}
		$Goods = M('Goods');
		if($id){
			$path = $Goods->where('id ='.$id)->field('href')->find();	//更头像
			$file = 'Public/upload/image/'.$path['href']; //储存之前的图像路径
			$result = $Goods->where('id ='.$id)->save($data);
			if($result){
				if(isset($data['href']) && $path['href'] !== 'example/example.jpg'){
					unlink($file);//成功后删除之前的图像
				}
				$this->success('修改成功', 'index');
			} else {
				$this->error('修改失败');
			}
		}else{
			$result = $Goods->add($data);
			if($result){
				$this->success('新增成功', 'add');
			} else {
				$this->error('新增失败');
			}
		}
	}
	public function del(){
		$lids = I('param.id');
		if(is_array($lids)){
			$lids = implode(',',$lids);
			$map['id']  = array('in',$lids);
		}else{
			$map['id'] = $lids;
		}
		$Goods = M('Goods');
		$result = $Goods->where($map)->delete();
		if($result){
			$this->success('删除成功');
		} else {
			$this->error('删除失败');
		}
	}
}