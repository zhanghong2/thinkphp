<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	
        /*  $upload = new \Think\Upload();// 实例化上传类    
    	$upload->maxSize   =     3145728 ;// 设置附件上传大小    
    	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
    	$upload->savePath  =      '__PUBLIC__/Uploads/'; // 设置附件上传目录    
    	// 上传文件     
    	$info   =   $upload->upload();    
    	if(!$info) {// 上传错误提示错误信息        
    		$this->error($upload->getError());    
    	}else{// 上传成功       
    		 $this->success('上传成功！');    
    	}  */
    	$this->display();
    }
    
    public function webup(){
               $config = array(
		   				'mimes'         =>  array(), //允许上传的文件MiMe类型
		   				'maxSize'       =>  0, //上传的文件大小限制 (0-不做限制)
		   				'exts'          =>  array('jpg', 'gif', 'png', 'jpeg'), //允许上传的文件后缀
		   				'autoSub'       =>  true, //自动子目录保存文件
		   				'subName'       =>  array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
		   				'rootPath'      =>  './Public/Uploads/', //保存根路径
		   				'savePath'      =>  '',//保存路径
		   			  
		   		);
		   		$upload = new \Think\Upload($config);// 实例化上传类
		   		 
		   		
		   		$info   =   $upload->upload();
		   		
		   		if(!$info) {
		   			 
		   			$this->error($upload->getError());// 上传错误提示错误信息
		   			 
		   		}else{// 上传成功
		   			/*
		   			 * 分离缩略图和轮播图
		   			 */
		   			//dump($info);
		   			foreach ($info as $va){
		   				
		   				if ($va['key']=="suoluetu"){
		   					$suoluetu.="Public/Uploads/luxian/".$va['savepath'].$va['savename']."||";
		   				}else {
		   					$lunbotu.="Public/Uploads/luxian/".$va['savepath'].$va['savename']."||";
		   				}
		   			}
		   		}
    }
   
}