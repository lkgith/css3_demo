<?php /* Smarty version 2.6.29, created on 2016-02-23 12:17:13
         compiled from dafengche.tpl */ ?>
<html>
<head>
  <title>git 常用命令</title>
    <link rel="stylesheet" type="text/css" href="/static/dafengche/dafengche.css">
</head>
<body>
  <div class="content">
    <?php $_from = $this->_tpl_vars['blockArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num'] => $this->_tpl_vars['item']):
?>
    <div class="blocks <?php echo $this->_tpl_vars['item']; ?>
">
      <div class="rotate-block">
        <div class="rotate-line rotate-line-X">
          <div class="rotate-line-X-block rotate-line-X-left-upper"></div>
          <div class="rotate-line-X-block rotate-line-X-left-below"></div>
          <div class="rotate-line-X-block rotate-line-X-right-upper"></div>
          <div class="rotate-line-X-block rotate-line-X-right-below"></div>
        </div>

        <div class="rotate-line rotate-line-Y">
          <div class="rotate-line-Y-block rotate-line-Y-left-upper"></div>
          <div class="rotate-line-Y-block rotate-line-Y-left-below"></div>
          <div class="rotate-line-Y-block rotate-line-Y-right-upper"></div>
          <div class="rotate-line-Y-block rotate-line-Y-right-below"></div>
        </div>
      </div>
      <div class="base-block"></div>
    </div>
    <?php endforeach; endif; unset($_from); ?>
  </div>
</body>
</html>