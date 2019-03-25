<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
	<li><a href="<?php  echo  $this->createWebUrl('version', array('foo'=>'index'));?>">系统更新</a></li>
    <li><a href="<?php  echo  $this->createWebUrl('version', array('foo'=>'ma'));?>">更新码更新</a></li>
    <li><a href="<?php  echo  $this->createWebUrl('version', array('foo'=>'reset'));?>">重置系统</a></li>
    <li class="active"><a href="<?php  echo  $this->createWebUrl('version', array('foo'=>'xiu'));?>">字段修复</a></li>
    <li><a href="<?php  echo  $this->createWebUrl('version', array('foo'=>'power'));?>">分权管理</a></li>
</ul>

<!--
<div class="clearfix">
<div><strong>修复文件下载，建议你先下载修复文件，然后执行修复</strong></div>    
    <form id="theform" class="form form-horizontal" action="<?php  echo $this->createWebUrl('version',array('foo'=>'downok'))?>" method="post">
    
    <input type="hidden" name="singekey" id="singekey" value="gohomefilefix" placeholder="" class="form-control">
    <div class="panel-body">
    
    </div>    
    
    <div class="form-group">
    	<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
        <div class="col-md-2 col-lg-1">
        	<div id="show_11">
        		<input name="submit" type="submit" value="下载修复文件" class="btn btn-primary btn-block" />
                <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
            </div>
        </div>
    </div>
    
    </form>
</div>

<h1>_______________________________________________________________</h1>

-->
<div class="clearfix">
	<div style="color:red;">
        <strong>注意：字段修复将会增加你数据库中缺失的字段,让数据库字段完善</strong>
    </div>    
	
    <div class="panel-body">
              
    </div>
    <div class="form-group">
    	<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
    	<div class="col-md-2 col-lg-1">
    		<input name="submit" type="submit" onclick="check()" value="确定修复" class="btn btn-primary btn-block" />
        </div>
    </div>
</div>

<script>
function check(){
	var str=prompt("请输入大写的OK","");
    if(str)
    {
        if(str == 'OK'){
			$.ajax({
				url: "<?php  echo $this->createWebUrl('version', array('foo'=>'xiuok'));?>",
				type:"POST",
				data:{},
				dataType:"json",
				success: function(res1){
					if(res1 == 1){
						alert('修改成功！');
					}else{
						alert('修改失败！');
					}
				}
			});
		}else{
			alert('输入错误，不能修改！');
			return false;
		}
    }
}
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>