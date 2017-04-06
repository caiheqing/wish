<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize()
    {
       if(session('username'))
       {
           $this->admin=session('username');
       }
       else if(cookie('username'))
       {
           $this->admin=  cookie('username');
       }
       else{
           $this->error('你还没有登录！',U('Login/index'),5);
       }
       
    }
}