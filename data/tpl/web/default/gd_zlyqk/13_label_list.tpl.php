<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template("base/child_header", TEMPLATE_INCLUDEPATH)) : (include template("base/child_header", TEMPLATE_INCLUDEPATH));?>
<style>
</style>
<form  class="layui-form">
<blockquote class="layui-elem-quote ">
    <div class="layui-inline">
        <div class="layui-input-inline">
            <input type="text" value="<?php  echo $_GPC['name'];?>" id="name" placeholder="组名称" class="layui-input search_input">
        </div>
        <a class="layui-btn" lay-submit lay-filter="search">搜索</a>
    </div>
    <?php  if($barMenu['add']) { ?>
    <div class="layui-inline">
        <a class="layui-btn layui-btn-normal newsAdd_btn" data-url="<?php  echo $this->createWebUrl('Add',array('tb'=>'label'))?>">添加</a>
    </div>
    <?php  } ?>
    <?php  if($barMenu['delete']) { ?>
    <div class="layui-inline">
        <a class="layui-btn layui-btn-danger batchDel">删除</a>
    </div>
    <?php  } ?>
</blockquote>
</form>
<div class="layui-form news_list">
    <table class="layui-table">
        <colgroup>
            <col width="50">
            <col width="10%">
            <col width="10%">
            <col width="9%">
            <col >
        </colgroup>
        <thead>
        <tr>
            <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th>
            <th>组名称</th>
            <th>状态</th>
            <th>创建时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody class="news_content">
        <?php  if(is_array($dataList)) { foreach($dataList as $admin) { ?>
        <tr>
            <td style="text-align: center !important;">
                <input type="checkbox" name="checked" value="<?php  echo $admin['id'];?>" lay-skin="primary" lay-filter="choose">
                <div class="layui-unselect layui-form-checkbox" lay-skin="primary">
                    <i class="layui-icon"></i>
                </div>
            </td>
            <td align="left"><?php  echo $admin['label_name'];?></td>
            <td>
                <input type="checkbox" <?php  if($admin['status']==1) { ?>checked<?php  } ?> name="show" disabled lay-skin="switch" lay-text="正常|禁用" lay-filter="isShow">
                <div class="layui-unselect layui-form-switch" lay-skin="_switch">
                    <em>禁用</em>
                    <i></i>
                </div>
            </td>
            <td><?php  echo date("Y-m-d",$admin['create_time'])?></td>
            <td>
                <?php  if($barMenu['edit']) { ?>
                <a class="layui-btn layui-btn-mini news_edit" data-id="<?php  echo $admin['id'];?>">
                    <i class="iconfont icon-edit"></i> 编辑
                </a>
                <?php  } ?>
                <?php  if($barMenu['delete']) { ?>
                <a class="layui-btn layui-btn-danger layui-btn-mini news_del" data-id="<?php  echo $admin['id'];?>">
                    <i class="layui-icon"></i> 删除
                </a>
                <?php  } ?>
            </td>
        </tr>
        <?php  } } ?>
        </tbody>
    </table>
</div>
<div id="page"></div>
<script>
    layui.use(['form','jquery','laypage'], function(){

        var name,mobile;
        var setting =new Object();

        var $ = layui.jquery;
        var form = layui.form();

        form.on('submit(search)', function(data){
            name=$("#name").val();
            url = "<?php  echo $this->createWebUrl('list',array('tb'=>'label'))?>"+"&name="+name;
            location.href=url;
            return false;
        });

        //分页
        setting.cont="page";
        setting.pages="<?php  echo $totalPage;?>";
        setting.curr="<?php  echo $page;?>";
        setting.skip=true;
        setting.hash="page";
        setting.jump=function(obj, first){
            name=$("#name").val();
            mobile=$("#mobile").val();
            if(first!=true){
                url = "<?php  echo $this->createWebUrl('list',array('tb'=>'label'))?>"+"&name="+name+"&page="+obj.curr;
                window.location.href =url;
            }
        };
        layui.laypage(setting);

        //删除操作
        $(".news_del").on("click",function(){
            var _this = $(this);
            layer.confirm('确定删除此信息？',{icon:3, title:'提示信息'},function(index){
                var id =_this.attr("data-id");
                $.post("<?php  echo $this->createWebUrl('delete')?>&tb=label&id="+id,function(response){
                    layer.msg(response.msg,{icon: response.code});
                    if(response.code==1){
                       _this.parents("tr").remove();
                    }
                },'json');
            });
        });

        //标记操作
        $(".news_edit").on("click",function(){
            var id = $(this).attr("data-id");
            var url = "<?php  echo $this->createWebUrl('Edit',array('tb'=>'label'))?>&id="+id;
            var index = layui.layer.open({
                title : "会员组编辑",
                type : 2,
                content : url,
                success : function(layero, index){
                    setTimeout(function(){
                        layui.layer.tips('点击此处返回组列表', '.layui-layer-setwin .layui-layer-close', {tips: 3});
                    },500)
                }
            });
            layui.layer.full(index);
        });


        $(".newsAdd_btn").click(function(){
            var url = $(this).attr("data-url");
            var index = layui.layer.open({
                title : "会员组添加",
                type : 2,
                content : url,
                success : function(layero, index){
                    setTimeout(function(){
                        layui.layer.tips('点击此处返回组列表', '.layui-layer-setwin .layui-layer-close', {
                            tips: 3
                        });
                    },500)
                }
            });
            layui.layer.full(index);
        });

        //批量删除
        $(".batchDel").click(function(){
            var $checkbox = $('.news_list tbody input[type="checkbox"][name="checked"]:checked');
            if($checkbox.is(":checked")){
                layer.confirm('确定删除选中的信息？',{icon:3, title:'提示信息'},function(index){
                    var id="";
                    $checkbox.each(function(){
                        id += (id=="") ? $(this).val() :","+$(this).val();
                    });
                    $.post("<?php  echo $this->createWebUrl('delete')?>&tb=label&id="+id,function(response){
                        layer.msg(response.msg,{icon: response.code});
                        if(response.code==1){
                            setTimeout(function(){
                                location.reload();
                            },1200);
                        }
                    },'json');
                    layer.msg("删除成功");
                })
            }else{
                layer.msg("请选择需要删除的部门");
            }
        });

        //全选
        form.on('checkbox(allChoose)', function(data){
            var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]:not([name="show"])');
            child.each(function(index, item){
                item.checked = data.elem.checked;
            });
            form.render('checkbox');
        });
    });
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template("base/child_footer", TEMPLATE_INCLUDEPATH)) : (include template("base/child_footer", TEMPLATE_INCLUDEPATH));?>