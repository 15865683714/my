<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>电子商城</title>
  <style type="text/css">
  #liebiao{
    margin:auto 10% ;
  }
    #bowen{
      text-align: center;
      width: 700px;
    }
    .gongju_huanjing,.jieshao{
      /*text-align: center;*/
      font-size: 10px;
      text-align: left;
      text-indent:2em
    }
    .zhize{
      /*width: 300px;*/
      text-align: left;
      /*font-size: 17px;*/
      color: green;
      text-indent:2em
    }
  </style>
</head>
<body>
  <div id="liebiao">
      <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><div class="jingli time_1" id="bowen">
             <h3 class="name"><?php echo ($v["name"]); ?></h3>
            <span class="gongju_huanjing">开发及环境：<?php echo ($v["gongju_huanjing"]); ?>&emsp;</span><br>
            <p class="jieshao"><?php echo ($v["jieshao"]); ?></p>
            <p class="zhize"><?php echo ($v["zhize"]); ?></p>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
</body>
</html>