<?php defined('IN_IA') or exit('Access Denied');?><div class="footer clearFix">
<ul>
	<li class="on">
	  <a href="<?php  echo $this->createMobileUrl('index')?>">
	  <i class="home"></i>
	  <p>首页</p>
	  </a>
	 </li>
	<li>
	  <a href="<?php  echo $this->createMobileUrl('fw_class')?>">
	    <i class="fenlei"></i>
		<p>全部分类</p>
	  </a>
	</li>
	<li>
	  <a href="<?php  echo $this->createMobileUrl('user_order')?>">
	    <i class="dingdan"></i>
		<p>我的订单</p>
	  </a>
	  </li>
	<li>
	  <a href="<?php  echo $this->createMobileUrl('index')?>">
	  <i class="manager"></i>
	  <p>管理员</p>
	  </a>
	</li>
</ul>	
</div>
<!--footer end-->
<script type="text/javascript" src="<?php  echo $templateurl;?>/js/jquery.min.js"></script>
<script type="text/javascript">
    $('.footer').on('click','li',function(){
    	$('.footer li').removeClass('on');
    	$(this).addClass('on');
    })
</script>
