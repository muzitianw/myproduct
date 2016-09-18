<?php
/**
 * Created by PhpStorm.
 * User: muzitian
 * Date: 2016/8/26
 * Time: 11:33
 */

namespace Ljq\Controller;

use Think\Controller;

class UserController extends Controller
{
    /*
     * 登录
     * */
    public function logins(){

        $this->display();
    }

    /*
     * 注册 - 页面
     * */
    public function registers(){
        
        $this->display();
    }
    /*
     * 注册 - 添加
     * */
    public function regi_add(){
        $phone = I('post.phone');
        $password = I('post.password');
        $code = I('post.code');
        $preg1  =   '/^1[34578]\d{9}$/';//验证手机号码
        $preg2  =   '/^[0-9]+$/';//数字
        $preg3  =   '/^[a-zA-Z]+$/';//字母
        $preg4  =   '/^(?=^.*?[^0-9a-zA-Z])^(.{6,16})$/';//数字字母外的其他字符

        if(strlen($phone) != 11){
            echo 11;
        }elseif(!preg_match($preg1,$phone)){
            echo 22;
        }else{
            $thisre = $this->phone_exist2();
            echo $thisre;
        }

        if(strlen($phone) < 6){
            
        }


        if(preg_match($preg2,$name) || preg_match($preg3,$name)){
            echo "错误";//纯中文或纯英文
        }elseif(preg_match($preg,$name)){
            echo "OK";//中文结合，因为前面排除纯中文或者纯因为
        }else{
            echo "错误";
        }

//        $User = M("user");          // 实例化User对象
//        $datb['phone'] = $phone; //把查询条件传入查询方法
//        $result = $User->where($datb)->select();
//        //echo '<pre>';var_dump($result);
//        if($result === false){
//            echo 44;
//        }elseif(empty($result)){
//            echo 66;
//        }else{
//            echo 22;
//        }

    }
    /*
     * 手机号 - 验证是否重复
     * */
    public function phone_exist(){
        $phone = I('post.phone');
        //echo $phone;
        //$phone = '18612587239';
        $User = M("user");          // 实例化User对象
        $datb['phone'] = $phone; //把查询条件传入查询方法
        $result = $User->where($datb)->select();
        //echo '<pre>';var_dump($result);
        if($result === false){
            //echo 44;
            $data['status']  = 0;
            $data['content'] = 'DB is wrong';
            $this->ajaxReturn($data);
        }elseif(empty($result)){
            //echo 66;
            $data['status']  = 1;
            $data['content'] = '手机号正确！';
            $this->ajaxReturn($data);
        }else{
            //echo 22;
            $data['status']  = 0;
            $data['content'] = '手机号已经存在了!';
            $this->ajaxReturn($data);
        }
    }
    public function phone_exist2(){
        $phone = I('post.phone');
        //echo $phone;
        //$phone = '18612587239';
        $User = M("user");          // 实例化User对象
        $datb['phone'] = $phone; //把查询条件传入查询方法
        $result = $User->where($datb)->select();
        //echo '<pre>';var_dump($result);
        if($result === false){
            //echo 44;//DB is wrong
            return 44;
        }elseif(empty($result)){
            //echo 66;//手机号正确！
            return 66;
        }else{
            //echo 22;//手机号已经存在了!
            return 22;
        }
    }
}