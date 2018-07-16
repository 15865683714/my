<?php if (!defined('THINK_PATH')) exit();?><link rel="Bookmark" href="/Public/admin/favicon.ico" >
<link rel="Shortcut Icon" href="/Public/admin/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Public/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/css/style.css" />
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/Public/admin/static/h-ui.admin/js/H-ui.admin.page.js"></script>
    <style type="text/css">
        .input-text{
          width: 267px;
        }
        .row{
          margin: auto 230px auto 0;
        }
    </style>
<section class="Hui-article-box" >
  <article class="cl pd-20" >
    <form action="" method="post" class="form form-horizontal" id="form-admin-add">
      <input type="hidden" name="id" id="aaa" value="<?php echo ($data["id"]); ?>">
      <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3" ><span class="c-red">*</span>标题：</label>
        <div class="formControls col-xs-8 col-sm-3">
          <input type="text" class="input-text" value="<?php echo ($data["title"]); ?>" id="title" placeholder="" id="adminName" name="title">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3" ><span class="c-red">*</span>内容：</label>
        <div class="formControls col-xs-8 col-sm-3">
          <textarea rows="5" cols="31" name="content" id="content"><?php echo ($data["content"]); ?></textarea>
        </div>
      </div>
      </volist>
      <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"></label>
        <div class="formControls col-xs-8 col-sm-9">
          <button id="btu" class="btn btn-primary radius" type="button"><i class="Hui-iconfont" >&#xe632;</i> 保存</button>
        </div>
    </div>
    </form>
  </article>
</section>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/Public/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

    $("#btu").click(function(){
      // alert(1);
      // console.log(this);
      var data = {
        id:$('#aaa').val(),
        title:$("#title").val(),
        content:$("#content").val()
      };
      // console.log(data);
      $.ajax({
        url:"/index.php/Admin/Manager/edit",
        type:"post",
        data: data,
        dataType:'json',
        success:function(response){
          if (response.code == 10000) {
            layer.msg("修改成功",{icon:1,time:1000});
            window.parent.location.reload();
          }else {
            layer.alert("修改失败",{icon:5},function(){window.parent.location.reload()});
          }
        }
      })
    });

</script>