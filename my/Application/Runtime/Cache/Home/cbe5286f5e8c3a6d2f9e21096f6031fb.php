<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>博文展示</title>
  <script type="text/javascript" src="/Public/home/js/jquery-1.8.3.min.js"></script>
  <style type="text/css">
  #liebiao{
    margin:auto 10% ;
  }
    #bowen{
      text-align: center;
      width: 700px;
    }
    .username,.time{
      /*text-align: center;*/
      font-size: 10px;
    }
    .content{
      /*width: 300px;*/
      text-align: left;
      /*font-size: 17px;*/
      color: green;
    }
    .time{
      /*width: 300px;*/
      text-align: right;
      /*font-size: 17px;*/
      color: red;
    }
    p{text-indent:2em;}
  </style>
</head>
<body>
  <div id="liebiao">
      <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><div class="jingli time_1" id="bowen">
             <h3 class="title" >
              <input type="hidden" name="id" class="id" value ="<?php echo ($v["id"]); ?>">
             <?php echo ($v["title"]); ?></h3>
            <span class="username">作者：<?php echo ($v["username"]); ?>&emsp;</span>
            <p class="content"><?php echo ($v["content"]); ?></p>
            <span class="count" id='sl'><?php echo ($v["count"]); ?></span>
            <img id="img" src="/Public\home\images\点赞 .png">
            <p class="time">发布时间：<?php echo ($v["time"]); ?></p>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
</body>
<script type="text/javascript">
  $('img').click(function() {
    var _this = this;
    var dz=$(_this).closest('.jingli').find(".count").html();
    var id=$(_this).closest('.jingli').find(".id").val();
         $.ajax({
                 url:'/index.php/Home/Index/tanchu4',
                 type:"post",
                 dataType:"JSON",
                 data:{'id':id},
                 success:function(data){
                   if (data.code == 10000) {
                      dz=parseInt(dz)
                      dz+=1;
                     $(_this).closest('.jingli').find(".count").html(dz);
                       alert(data.msg);
                   }else{
                     alert(data.msg);
                   }
                 },
             });
  });
</script>
</html>