<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/wxz_wzb/template/js/multiselectSrc/jquery.multiselect.css" />
<link rel="stylesheet" type="text/css" href="../addons/wxz_wzb/template/js/ui/jquery-ui.css" />
<script type="text/javascript" src="../addons/wxz_wzb/template/js/ui/jquery.ui.core.js"></script>
<script type="text/javascript" src="../addons/wxz_wzb/template/js/ui/jquery.ui.widget.js"></script>
<script type="text/javascript" src="../addons/wxz_wzb/template/js/multiselectSrc/jquery.multiselect.js"></script>
<script type="text/javascript">
$(function(){
    $("select").multiselect({
        noneSelectedText: "==请选择==",
        checkAllText: "全选",
        uncheckAllText: '全不选',
        selectedList:4
    });
});

</script>
</head>
<body>
<form action="" method="post" class="form-horizontal" role="form" id="form1" >
<div class="panel panel-default">	
            <div class="panel-heading">
                批量修改(由于部分用户直播数据较大，因升级所造成的部分参数修改较为麻烦，特设置批量修改功能)
            </div>
	<div class="panel-body">
		<div class="form-group">
			<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">直播间列表</label>
			<div class="col-sm-8 col-lg-9 col-xs-12">
					<select name="rid[]" multiple="multiple" size="8">
						<?php  if(is_array($lists)) { foreach($lists as $val) { ?>
						<optgroup label="<?php  echo $val['title'];?>">
							<?php  if(is_array($val['list'])) { foreach($val['list'] as $v) { ?>
							<option value="<?php  echo $v['rid'];?>"><?php  echo $v['title'];?></option>
							<?php  } } ?>
						</optgroup>
						<?php  } } ?>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 是否设置滚动广告</label>
			<div class="col-sm-9 col-xs-12">
			   <label class='radio-inline' >
					<input type='radio' name="isgun" value='1' <?php  if($list['type']==1) { ?>checked<?php  } ?> />是
				</label>
				<label class='radio-inline' >
					<input type='radio' name="isgun" value='0' <?php  if($list['type']==0) { ?>checked<?php  } ?> /> 否
				</label>
				<div class="help-block"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 滚动广告是否开启</label>
			<div class="col-sm-9 col-xs-12">
			   <label class='radio-inline' >
					<input type='radio' name="gtype" value='1' <?php  if($list['type']==1) { ?>checked<?php  } ?> />是
				</label>
				<label class='radio-inline' >
					<input type='radio' name="gtype" value='0' <?php  if($list['type']==0) { ?>checked<?php  } ?> /> 否
				</label>
				<div class="help-block"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">滚动内容</label>
			<div class="col-sm-8 col-lg-9 col-xs-12">
				<input type="text" class="form-control" name="gcontent" value="<?php  echo $list['content'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 是否设置开屏广告</label>
			<div class="col-sm-9 col-xs-12">
			   <label class='radio-inline' >
					<input type='radio' name="iskai" value='1' <?php  if($list['type']==1) { ?>checked<?php  } ?> />是
				</label>
				<label class='radio-inline' >
					<input type='radio' name="iskai" value='0' <?php  if($list['type']==0) { ?>checked<?php  } ?> /> 否
				</label>
				<div class="help-block"></div>
			</div>
		</div>
		<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 是否开启</label>
					<div class="col-sm-9 col-xs-12">
					   <label class='radio-inline' >
							<input type='radio' name="ktype" value='1' <?php  if($list['type']==1) { ?>checked<?php  } ?> />是
						</label>
						<label class='radio-inline' >
							<input type='radio' name="ktype" value='0' <?php  if($list['type']==0) { ?>checked<?php  } ?> /> 否
						</label>
						<div class="help-block"></div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">开屏图片</label>
					<div class="col-sm-8 col-lg-9 col-xs-12">
						<?php  echo tpl_form_field_image('kimages', $list['images']);?>
						<div class="help-block"><font style="color: red">最佳尺寸：640*1100px</font></div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">开屏图片倒计时</label>
					<div class="col-sm-8 col-lg-9 col-xs-12">
						<div class="input-group">
							<div class="input-group-addon">时间</div>
							<input type="text" class="form-control" name="kcount_time" value="<?php  echo $list['count_time'];?>">
							<div class="input-group-addon">秒</div>
						</div>
						<span class="help-block">开屏图片倒计时</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">广告链接</label>
					<div class="col-sm-8 col-lg-9 col-xs-12">
							<input type="text" name="kurl" value="<?php  echo $list['kurl'];?>" class="form-control">
							<span class="help-block">开屏图片不填则跳转直播间</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">开屏倒计时背景色</label>
					<div class="col-sm-8 col-lg-9 col-xs-12">
							<?php  echo tpl_form_field_color('kbgcolor',$list['kbgcolor']);?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">开屏倒计时字体颜色</label>
					<div class="col-sm-8 col-lg-9 col-xs-12">

							<?php  echo tpl_form_field_color('kcolor',$list['kcolor']);?>

					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">开屏倒计时秒数颜色</label>
					<div class="col-sm-8 col-lg-9 col-xs-12">

							<?php  echo tpl_form_field_color('ktimecolor',$list['ktimecolor']);?>

					</div>
				</div>
				</div>
				<div class="form-group">
	<div class="col-sm-12">
		<input name="submit" type="submit" value="提交" class="btn btn-success" />
		<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
	</div>
	</div>
    </div>
</div>

	

</form>
	

</body>
</html>
