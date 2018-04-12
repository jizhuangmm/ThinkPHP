<?php
namespace Caruser\Controller;

use Think\Controller;

class CaruserController extends Controller
{
  
  // 个人中心
  public function user()
  {
    $this->display();
  }
  // 车主俱乐部
  public function club()
  {
    $this->display();
  }
  // 积分管理
  public function points()
  {
    $this->display();
  }
}