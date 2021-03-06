<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="we7-page-tab">
	<li class="active"><a href="javascript:;">联系信息</a></li>
</ul>
<div class="clearfix">
	<form action="" method="post"  class="we7-form" role="form" enctype="multipart/form-data">
		<div class="form-group hidden">
			<label class="col-sm-2 control-label" style="text-align:left;">是否显示</label>
			<div class="col-sm-8 form-control-static">
				<input type="radio" name="close" id="status-1" <?php  if($connect['close'] == 0) { ?> checked="checked"<?php  } ?> value="0">
				<label class="radio-inline" for="status-1">是</label>
				<input type="radio" name="close" id="status-0" <?php  if($connect['close'] == 1) { ?> checked="checked"<?php  } ?> value="1">
				<label class="radio-inline" for="status-0">否</label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" style="text-align:left;">联系人</label>
			<div class="col-sm-8">
				<input type="text" name="person" class="form-control" value="<?php  echo $connect['person'];?>" placeholder="请输入联系人" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" style="text-align:left;">QQ</label>
			<div class="col-sm-8">
				<input type="text" name="qq" class="form-control" value="<?php  echo $connect['qq'];?>" placeholder="请输入联系人QQ" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" style="text-align:left;">联系电话</label>
			<div class="col-sm-8">
				<input type="text" name="phone" class="form-control" value="<?php  echo $connect['phone'];?>" placeholder="请输入联系电话" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" style="text-align:left;">公司名称</label>
			<div class="col-sm-8">
				<input type="text" name="company" class="form-control" value="<?php  echo $connect['company'];?>" placeholder="请输入公司名称" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" style="text-align:left;">邮箱</label>
			<div class="col-sm-8">
				<input type="text" name="email" class="form-control" value="<?php  echo $connect['email'];?>" placeholder="请输入邮箱" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" style="text-align:left;">地址</label>
			<div class="col-sm-8">
				<input type="text" name="address" class="form-control" value="<?php  echo $connect['address'];?>" placeholder="请输入地址" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" style="text-align:left;">备案号</label>
			<div class="col-sm-8">
				<input type="text" name="icp" class="form-control" value="<?php  echo $connect['icp'];?>" placeholder="请输入备案号" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" style="text-align:left;">二维码</label>
			<div class="col-sm-8">
				<?php  echo tpl_form_field_image('thumb',$connect['thumb'])?>
				<span class="help-block">建议尺寸：150px * 150px</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" style="text-align:left;">地理位置</label>
			<div class="col-sm-8">
				<?php  echo tpl_form_field_coordinate('baidumap', $connect['baidumap'])?>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" style="text-align:left;"></label>
			<div class="col-sm-8">
				<input type="hidden" name="token" value="<?php  echo $_W['token'];?>">
				<input type="submit" name="submit" value="保存" class="btn btn-primary">
			</div>
		</div>
	</form>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>