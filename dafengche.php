<?php
  //创建实际路径
  define('ROOT_PATH',dirname(_FILE_));
  require ROOT_PATH.'/smarty/Smarty.class.php';
  //创建一个smarty对象
  $_smarty  = new Smarty();
  $title = 'smarty2';
  $title.= '学习笔记';
  $userName = '11';

$title.= '学习笔记';

$HTTP_REFERER = $_SERVER['HTTP_REFERER'];

  //注册变量,即扔数据给模板文件
  $_smarty ->assign('title',$title);
  $_smarty ->assign('userName',$userName);
  $blockArr = array("blcok_1","block_2","block_3");
  $_smarty ->assign("blockArr",$blockArr);
  //缓存是否开启
  $_smarty ->caching=false;
  //左右定界符
  $_smarty ->left_delimiter='{%';
  $_smarty ->right_delimiter='%}';
  //注册模板，即引入模板
  $_smarty ->display('dafengche.tpl');

?>