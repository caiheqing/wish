<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        if(IS_POST)
        {
            if(check_code(I('code')) === false){       
            $this->error('验证码错误');
            }
            
            $arr=array(
                    'username'=>I('username'),
                    'password'=>md5(I('password'))
                );
            $adminDb=M('admin');
            //$admin是一个数组
            $admin=$adminDb->where($arr)->find();
            if($admin){
                //判断管理员用户是否锁定
                if($admin['lock']==1)
                {
                    $this->error('管理员用户被锁定，请联系管理员');
                }
                //保存登录管理员信息
                session('aid', $admin['aid']);
                session('username',$admin['username']);
                if(I('auto')=='on'){
                    cookie('aid',$admin['aid'],30*24*3600);
                    cookie('username',$admin['username'],30*24*3600);
                }
                //更新数据
                $data=array(
                    'aid'=>$admin['aid'],
                    'atime'=>time(),
                    'aip'=>  get_client_ip()
                );
                $adminDb->save($data);
                
                $this->success('登录成功',U('Index/index'));
            }
            else{
                $this->error('用户名或密码不正确，请重新输入');
            }
        }
        else{
        $this->display();}
    }
    
    //验证码
    public function verify()
    {
        $config = array(
            'fontSize'    =>    20,    // 验证码字体大小
            'length'      =>    2,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
        );
        $verify = new \Think\Verify($config);
        $verify->entry();
    }
    
    //注销
    public function logout()
    {
        session('username',null);
        session('aid',null);
        cookie('username',null);
        cookie('aid',NULL);
        $this->redirect('index');
    }
}