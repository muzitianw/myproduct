<?php
namespace Ljq\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        //echo 'Hello world !';
        //layout(false); // 临时关闭当前模板的布局功能
        $this->display();
    }
}