<?php
namespace Admin\Controller;
use Think\Controller;
class ImgController extends Controller {
	public function index(){
		$Img = M('Img');
		$ol = I('get.ol');
		$time = I('get.order');
		$count = $Img->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count,8); // 实例化分页类 传入总记录数和每页显示的记录数(10)
		if($ol){
			 $ol = "ol $ol";
			 $img = $Img -> order($ol) -> limit($Page->firstRow . ',' . $Page->listRows)->select();
		} 
		else {
			$order = empty($time) ? 'time desc' : "time $time";
			$img = $Img -> order($order) -> limit($Page->firstRow . ',' . $Page->listRows)->select();
		}
		$Page->setConfig('prev', '<');
		$Page->setConfig('next', '>');
		$Page->setConfig('header','');
		$show = $Page->show(); // 分页显示输出
		$this->assign('page', $show); // 赋值分页输出
		$this->assign('img',$img);
		$this->display();	
	}
	public function add(){
		$this->display();
    }
	public function edit(){
		$data['id'] = I('get.id');
		$Img = M('Img');
		$img = $Img->where($data)->find();
		$this->assign('img',$img);
		$this->display();
	}
	public function update(){
		$Img = M('Img');
		$id = I('post.id');
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
				$data['img'] = $info['img']['savepath'] . $info['img']['savename'];
			}
			else if(!$id){
				$this->error('图片上传失败','add');
				}
			
		}
		if($data['ol']<=5 && $data['ol'] >=1){
			$check['ol'] = $data['ol'];
			$check['id'] =  array ('neq',$id);
			$oldOl = $Img -> where($check) -> find();
			if($oldOl){													//修改旧的RANK值
				$r['ol'] = 0;
				$Img -> where('id='.$oldOl['id']) -> save($r);
			}
		}
		if($id){
			$path = $Img->where('id ='.$id)->field('img')->find();	//找到图片
			$file = 'Public/upload/image/'.$path['img']; 				//储存之前的图像路径
			$result = $Img ->where('id ='.$id)->save($data);
			if($result){
				if(isset($data['img'])){
					unlink($file);//成功后删除之前的图像
				}
				$this->success('修改成功', 'index');
			} else {
				$this->error('修改失败');
			}
		}else{
			$result = $Img->add($data);
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
		$Img = M('Img');
		$result = $Img->where($map)->delete();
		if($result){
			$this->success('删除成功');
		} else {
			$this->error('删除失败');
		}
	}

	
}


?>