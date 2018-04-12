<?php
namespace Caruser\Controller;

use Think\Controller;

class ServicesController extends Controller
{
  
  // 维修保养
  public function maintain()
  {
    $this->display();
  }
  // 金融保险
  public function renewal()
  {
    $this->display();
  }
  // 紧急救援
  public function rescue()
  {
    $this->display();
  }
}