<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>


<!--参与粉丝/中奖名单-->
<div class="main">
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('list_nav', TEMPLATE_INCLUDEPATH)) : (include template('list_nav', TEMPLATE_INCLUDEPATH));?>

<style>
#myTab a{margin:5px !important;}
</style>
<form action="" method="post" class="form-horizontal" role="form" id="form1" >
<input type="hidden" name="id" value="<?php  echo $list['id'];?>"> 
<div class="panel panel-default">	
	<div class="panel-body">
			<div class="panel panel-default">
						  <div class="panel-body">
						  <div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 是否开启</label>
										<div class="col-sm-9 col-xs-12">
										   <label class='radio-inline' >
												<input type='radio' name="type" value='1' <?php  if($list['type']==1) { ?>checked<?php  } ?> />是
											</label>
											<label class='radio-inline' >
												<input type='radio' name="type" value='0' <?php  if($list['type']==0) { ?>checked<?php  } ?> /> 否
											</label>
											<div class="help-block"></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">开屏图片</label>
										<div class="col-sm-8 col-lg-9 col-xs-12">
											<?php  echo tpl_form_field_image('images', $list['images']);?>
											<div class="help-block"><font style="color: red">最佳尺寸：640*1100px</font></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">开屏图片倒计时</label>
										<div class="col-sm-8 col-lg-9 col-xs-12">
											<div class="input-group">
												<div class="input-group-addon">时间</div>
												<input type="text" class="form-control" name="count_time" value="<?php  echo $list['count_time'];?>">
												<div class="input-group-addon">秒</div>
											</div>
											<span class="help-block">开屏图片倒计时</span>
										</div>
									</div>
	
									<div class="form-group">
										<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">广告链接</label>
										<div class="col-sm-8 col-lg-9 col-xs-12">
												<input type="text" name="url" value="<?php  echo $list['url'];?>" class="form-control">
												<span class="help-block">开屏图片不填则跳转直播间</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">开屏倒计时背景色</label>
										<div class="col-sm-8 col-lg-9 col-xs-12">
												<?php  echo tpl_form_field_color('bgcolor',$list['bgcolor']);?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">开屏倒计时字体颜色</label>
										<div class="col-sm-8 col-lg-9 col-xs-12">

												<?php  echo tpl_form_field_color('color',$list['color']);?>

										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">开屏倒计时秒数颜色</label>
										<div class="col-sm-8 col-lg-9 col-xs-12">

												<?php  echo tpl_form_field_color('timecolor',$list['timecolor']);?>

										</div>
									</div>
									</div>
					</div>
    </div>
</div>

	<div class="form-group">
			<div class="col-sm-12">
				<input name="submit" type="submit" value="提交" class="btn btn-success" />
				<input type="hidden" name="id" value="<?php  echo $list['id'];?>" />
				<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			</div>
			</div>
	</div>
</form>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>