<?php
namespace Admin\Controller;
use Think\Controller;
class WishController extends CommonController {
    //许愿帖子列表
    public function index()
    {
        $userDb=M('User');
        // 查询满足要求的总记录数
        $count=$userDb->count();   
        // 实例化分页类 传入总记录数和每页显示的记录数(2)
        $page=new \Think\Page($count, 2);
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $limit=$page->firstRow.','.$page->listRows;
                
        $wish=$userDb->limit($limit)->select();
        // 分页显示输出
        $this->assign('page',$page->show());
        $this->assign('wish',$wish);
        $this->display();
    }
    
    //许愿删除
    public function del()
    {
        $uid=I('uid');
        if(M('User')->delete($uid))
        {
            $this->success('删除成功',U('index'));
        }
        else{
            $this->error('删除失败');
        }
    }
    
    
}
