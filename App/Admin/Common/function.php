<?php
/**
*
* 函数：日志记录
* @param  string $log   日志内容。
* @param  string $name （可选）用户名。
*
**/
function addlog($log,$name=false){
	$Model = M('log');
	if(!$name){
		$user = session('account');
		$data['user'] = $user;
	}else{
		$data['user'] = $name;
	}
	$data['ip'] = $_SERVER["REMOTE_ADDR"];
	$data['log'] = $log;
	$Model->data($data)->add();
}
