<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends Controller {
    //首页视图
    public function index(){
        $user=M('user')->select();
        $this->assign('user', $user);
        $this->display();
    }
    //在线异步处理表单视图
    public function ajaxhandle()
    {
        if(!IS_AJAX) $this->error ('页面不存在');
        $data=array(
          'username'=>I('username'),
          'content'=>I('content'),
          'time'=>  time()     
        );
        if($uid=M('user')->data($data)->add())
        {
            $data['content']=  face($data['content']);
            $data['time']=date('Y-m-d H:i',$data['time']);
            $data['status']=1;
            $this->ajaxReturn($data, 'json');
        }
        else{
            $this->ajaxReturn(array('status'=>0),'json');
        }
        //p(I('post.'));
//        $data=array(
//                    'zhuakuang'=>'抓狂',
//                    'baobao'=>'抱抱',
//                    'haixiu'=>'害羞',
//                    'ku'=>'酷',
//                    'xixi'=>'嘻嘻',
//                    'taikaixin'=>'太开心',
//                    'touxiao'=>'偷笑',
//                    'qian'=>'钱',
//                    'huaxin'=>'花心',
//                    'jiyan'=>'挤眼',
//        );
//       F('face',$data,'./Data/');


    }
    //在线处理表单视图
    public function handle()
    {
      if(!IS_POST) $this->error('页面不存在');
      $data=array(
          'username'=>I('username'),
          'content'=>face(I('content')),
          'time'=>  time()
      );
      
      if(M('user')->data($data)->add())
      {
          $this->success('添加成功','index');
      }
      else{
          $this->error('添加失败');
      }
    }
}