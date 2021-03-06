<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
    <link rel="stylesheet" type="text/css" href="<?php  echo $static;?>/css/switch-style.css"/>
    <ul class="we7-page-tab">
        <?php  if(is_array($opList)) { foreach($opList as $index => $item) { ?>
        <?php  if($item['active'] == 1) { ?>
        <li class="active"><?php  echo $item['title'];?></li>
        <?php  } else { ?>
        <li><a href="<?php  echo $item['url'];?>"><?php  echo $item['title'];?></a></li>
        <?php  } ?>
        <?php  } } ?>
    </ul>
    <div class="main" style="">
        <div class="btn-group" id="templist">
        </div>
        <form method="post" class="form-horizontal form" id="form" novalidate="novalidate" style="">
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">网站名称</label>
                <div class="col-xs-12 col-sm-8">
                    <input type="text" name="post[name]" class="form-control" value="<?php  echo $data['name'];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">网站icon</label>
                <div class="col-xs-12 col-sm-8">
                    <?php  echo tpl_form_field_image('post[icon]',$data['icon']);?>
                    <label style="color: #b32419">推荐尺寸：55*55</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">网站LOGO</label>
                <div class="col-xs-12 col-sm-8">
                    <?php  echo tpl_form_field_image('post[logo]',$data['logo']);?>
                    <label style="color: #b32419">推荐尺寸：230*40</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">网站关键字</label>
                <div class="col-xs-12 col-sm-8">
                    <textarea name="post[keyword]" class="form-control" cols="30" rows="2"><?php  echo $data['keyword'];?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">网站描述</label>
                <div class="col-xs-12 col-sm-8">
                    <textarea name="post[desc]" class="form-control" cols="30" rows="2"><?php  echo $data['desc'];?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">网站版权设置</label>
                <div class="col-xs-12 col-sm-8">
                    <textarea name="post[copyright]" class="form-control" cols="30" rows="2"><?php  echo $data['copyright'];?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">网站备案号</label>
                <div class="col-xs-12 col-sm-8">
                    <input type="text" name="post[beian]" class="form-control" value="<?php  echo $data['beian'];?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 col-sm-offset-3 col-md-offset-2 col-lg-offset-2">
                    <input name="submit" type="submit" value="提交" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript">
    </script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>